<?php

require_once "Services/Repository/classes/class.ilObjectPluginGUI.php";
require_once "Customizing/global/plugins/Services/Repository/RepositoryObject/H5P/classes/class.ilH5PPlugin.php";
require_once "Services/Form/classes/class.ilPropertyFormGUI.php";
require_once "Services/AccessControl/classes/class.ilPermissionGUI.php";
require_once "Customizing/global/plugins/Services/Repository/RepositoryObject/H5P/classes/H5P/class.ilH5P.php";
require_once "Customizing/global/plugins/Services/Repository/RepositoryObject/H5P/classes/GUI/class.ilH5PContentsTableGUI.php";
require_once "Customizing/global/plugins/Services/Repository/RepositoryObject/H5P/classes/GUI/class.ilH5PResultsTableGUI.php";
require_once "Services/Utilities/classes/class.ilConfirmationGUI.php";
require_once "Services/Utilities/classes/class.ilUtil.php";
require_once "Services/Form/classes/class.ilCheckboxInputGUI.php";
require_once "Services/UIComponent/Button/classes/class.ilLinkButton.php";

/**
 * H5P GUI
 *
 * @ilCtrl_isCalledBy ilObjH5PGUI: ilRepositoryGUI
 * @ilCtrl_isCalledBy ilObjH5PGUI: ilObjPluginDispatchGUI
 * @ilCtrl_isCalledBy ilObjH5PGUI: ilAdministrationGUI
 * @ilCtrl_Calls      ilObjH5PGUI: ilPermissionGUI
 * @ilCtrl_Calls      ilObjH5PGUI: ilInfoScreenGUI
 * @ilCtrl_Calls      ilObjH5PGUI: ilObjectCopyGUI
 * @ilCtrl_Calls      ilObjH5PGUI: ilCommonActionDispatcherGUI
 * @ilCtrl_Calls      ilObjH5PGUI: ilH5PActionGUI
 */
class ilObjH5PGUI extends ilObjectPluginGUI {

	const CMD_ADD_CONTENT = "addContent";
	const CMD_CREATE_CONTENT = "createContent";
	const CMD_DELETE_CONTENT_CONFIRM = "deleteContentConfirm";
	const CMD_DELETE_RESULTS_CONFIRM = "deleteResultsConfirm";
	const CMD_EDIT_CONTENT = "editContent";
	const CMD_MANAGE_CONTENTS = "manageContents";
	const CMD_MOVE_CONTENT_DOWN = "moveContentDown";
	const CMD_MOVE_CONTENT_UP = "moveContentUp";
	const CMD_PERMISSIONS = "perm";
	const CMD_RESULTS = "results";
	const CMD_SETTINGS = "settings";
	const CMD_SETTINGS_STORE = "settingsStore";
	//const CMD_SHOW_CONTENT = "showContent";
	const CMD_SHOW_CONTENTS = "showContents";
	const CMD_UPDATE_CONTENT = "updateContent";
	const TAB_CONTENTS = "contents";
	const TAB_PERMISSIONS = "perm_settings";
	const TAB_RESULTS = "results";
	const TAB_SETTINGS = "settings";
	const TAB_SHOW_CONTENTS = "showContent";
	/**
	 * @var ilH5P
	 */
	protected $h5p;
	/**
	 * Fix autocomplete (Defined in parent)
	 *
	 * @var ilObjH5P
	 */
	var $object;
	/**
	 * Fix autocomplete (Defined in parent)
	 *
	 * @var ilH5PPlugin
	 */
	protected $plugin;
	/**
	 * @var ilToolbarGUI
	 */
	protected $toolbar;
	/**
	 * @var ilObjUser
	 */
	protected $usr;


	protected function afterConstructor() {
		global $DIC;

		$this->h5p = ilH5P::getInstance();
		$this->toolbar = $DIC->toolbar();
		$this->usr = $DIC->user();
	}


	/**
	 * @return string
	 */
	final function getType() {
		return ilH5PPlugin::ID;
	}


	/**
	 * @param string $cmd
	 */
	function performCommand($cmd) {
		$next_class = $this->ctrl->getNextClass($this);

		switch ($next_class) {
			default:
				switch ($cmd) {
					case self::CMD_SHOW_CONTENTS:
						// Read commands
						if (!ilObjH5PAccess::hasReadAccess()) {
							ilObjH5PAccess::redirectNonAccess(ilRepositoryGUI::class);
						}

						$this->{$cmd}();
						break;

					case self::CMD_DELETE_RESULTS_CONFIRM:
					case self::CMD_MANAGE_CONTENTS:
					case self::CMD_RESULTS:
					case self::CMD_SETTINGS:
					case self::CMD_SETTINGS_STORE:
						// Write commands
						if (!ilObjH5PAccess::hasWriteAccess()) {
							ilObjH5PAccess::redirectNonAccess($this);
						}

						$this->{$cmd}();
						break;

					case self::CMD_ADD_CONTENT:
					case self::CMD_CREATE_CONTENT:
					case self::CMD_DELETE_CONTENT_CONFIRM:
					case self::CMD_EDIT_CONTENT:
					case self::CMD_MOVE_CONTENT_DOWN:
					case self::CMD_MOVE_CONTENT_UP:
						//case self::CMD_SHOW_CONTENT:
					case self::CMD_UPDATE_CONTENT:
						// Write commands only when no results available
						if (!ilObjH5PAccess::hasWriteAccess() || $this->hasResults()) {
							ilObjH5PAccess::redirectNonAccess($this);
						}

						$this->{$cmd}();
						break;

					case ilH5PActionGUI::CMD_H5P_ACTION:
					case ilH5PActionGUI::CMD_CANCEL:
						// Read commands
						if (!ilObjH5PAccess::hasReadAccess()) {
							ilObjH5PAccess::redirectNonAccess(ilRepositoryGUI::class);
						}

						ilH5PActionGUI::forward($this);
						break;

					default:
						// Unknown command
						ilObjH5PAccess::redirectNonAccess(ilRepositoryGUI::class);
						break;
				}
				break;
		}
	}


	/**
	 * @param string $html
	 */
	protected function show($html) {
		if ($this->ctrl->isAsynch()) {
			echo $html;

			exit();
		} else {
			$this->tpl->setTitle($this->object->getTitle());

			$this->tpl->setDescription($this->object->getDescription());

			if (!$this->object->isOnline()) {
				$this->tpl->setAlertProperties([
					[
						"alert" => true,
						"property" => $this->txt("xhfp_status"),
						"value" => $this->txt("xhfp_offline")
					]
				]);
			}

			$this->tpl->setContent($html);
		}
	}


	/**
	 * @param string $a_new_type
	 *
	 * @return ilPropertyFormGUI
	 */
	function initCreateForm($a_new_type) {
		$form = parent::initCreateForm($a_new_type);

		return $form;
	}


	/**
	 * @param ilObjH5P $a_new_object
	 */
	function afterSave(ilObject $a_new_object) {
		parent::afterSave($a_new_object);
	}


	/**
	 * @return bool
	 */
	function hasResults() {
		return (count(ilH5PResult::getResultsByObject($this->obj_id)) > 0);
	}


	/**
	 *
	 */
	protected function manageContents() {
		$this->tabs_gui->activateTab(self::TAB_CONTENTS);

		if (ilObjH5PAccess::hasWriteAccess() && !$this->hasResults()) {
			$add_content = ilLinkButton::getInstance();
			$add_content->setCaption($this->txt("xhfp_add_content"), false);
			$add_content->setUrl($this->ctrl->getLinkTarget($this, self::CMD_ADD_CONTENT));
			$this->toolbar->addButtonInstance($add_content);
		}

		$contents_table = new ilH5PContentsTableGUI($this, self::CMD_MANAGE_CONTENTS);

		$this->show($contents_table->getHTML());
	}


	/**
	 *
	 */
	protected function moveContentDown() {
		$content_id = filter_input(INPUT_GET, "xhfp_content");

		ilH5PContent::moveContentDown($content_id, $this->obj_id);

		$this->show("");
	}


	/**
	 *
	 */
	protected function moveContentUp() {
		$content_id = filter_input(INPUT_GET, "xhfp_content");

		ilH5PContent::moveContentUp($content_id, $this->obj_id);

		$this->show("");
	}


	/**
	 * @return ilPropertyFormGUI
	 */
	protected function getEditorForm() {
		$h5p_content = ilH5PContent::getCurrentContent();

		$form = ilH5PEditor::getInstance()->getEditorForm($h5p_content);

		if ($h5p_content !== NULL) {
			$this->ctrl->setParameter($this, "xhfp_content", $h5p_content->getContentId());
		}

		$form->setFormAction($this->ctrl->getFormAction($this));

		$form->addCommandButton($h5p_content !== NULL ? self::CMD_UPDATE_CONTENT : self::CMD_CREATE_CONTENT, $this->txt($h5p_content
		!== NULL ? "xhfp_save" : "xhfp_add"), "xhfp_edit_form_submit");
		$form->addCommandButton(self::CMD_MANAGE_CONTENTS, $this->txt("xhfp_cancel"));

		return $form;
	}


	/**
	 *
	 */
	protected function addContent() {
		$this->tabs_gui->activateTab(self::TAB_CONTENTS);

		$form = $this->getEditorForm();

		$this->show($form->getHTML());
	}


	/**
	 *
	 */
	protected function createContent() {
		$this->tabs_gui->activateTab(self::TAB_CONTENTS);

		$form = $this->getEditorForm();

		$form->setValuesByPost();

		if (!$form->checkInput()) {
			$this->show($form->getHTML());

			return;
		}

		ilH5PEditor::getInstance()->createContent($form);

		$this->ctrl->redirect($this, self::CMD_MANAGE_CONTENTS);
	}


	/**
	 *
	 */
	protected function editContent() {
		$this->tabs_gui->activateTab(self::TAB_CONTENTS);

		$form = $this->getEditorForm();

		$this->show($form->getHTML());
	}


	/**
	 *
	 */
	protected function updateContent() {
		$this->tabs_gui->activateTab(self::TAB_CONTENTS);

		$form = $this->getEditorForm();

		$form->setValuesByPost();

		if (!$form->checkInput()) {
			$this->show($form->getHTML());

			return;
		}

		$h5p_content = ilH5PContent::getCurrentContent();

		ilH5PEditor::getInstance()->updateContent($h5p_content, $form);

		$this->ctrl->redirect($this, self::CMD_MANAGE_CONTENTS);
	}


	/**
	 *
	 */
	protected function deleteContentConfirm() {
		$this->tabs_gui->activateTab(self::TAB_CONTENTS);

		$h5p_content = ilH5PContent::getCurrentContent();

		$this->ctrl->setParameterByClass(ilH5PActionGUI::class, "xhfp_content", $h5p_content->getContentId());

		$confirmation = new ilConfirmationGUI();

		$confirmation->setFormAction(ilH5PActionGUI::getFormAction(ilH5PActionGUI::H5P_ACTION_CONTENT_DELETE, $this, self::CMD_MANAGE_CONTENTS));

		$confirmation->setHeaderText(sprintf($this->txt("xhfp_delete_content_confirm"), $h5p_content->getTitle()));

		$confirmation->setConfirm($this->txt("xhfp_delete"), ilH5PActionGUI::CMD_H5P_ACTION);
		$confirmation->setCancel($this->txt("xhfp_cancel"), ilH5PActionGUI::CMD_CANCEL);

		$this->show($confirmation->getHTML());
	}


	/**
	 *
	 */
	protected function showContents() {
		$this->tabs_gui->activateTab(self::TAB_SHOW_CONTENTS);

		$user_id = $this->usr->getId();

		$h5p_contents = array_values(ilH5PContent::getContentsByObject($this->obj_id));

		$index = - 1;
		$count = count($h5p_contents);

		// Look after a content without result
		$h5p_content = NULL;
		foreach ($h5p_contents as $h5p_content) {
			/**
			 * @var ilH5PContent $h5p_content
			 */

			$h5p_result = ilH5PResult::getResultByUser($user_id, $h5p_content->getContentId());

			if ($h5p_result === NULL) {
				// Content has no results
				$index = array_search($h5p_content, $h5p_contents);
				break;
			}

			// Content has results
			$h5p_content = NULL;
		}

		if ($h5p_content !== NULL) {
			// Content without results available
			$this->h5p->h5p_scripts[] = $this->plugin->getDirectory() . "/js/H5PContent.js";

			$next_content = ilLinkButton::getInstance();
			if ($index < ($count - 1)) {
				$next_content->setCaption($this->txt("xhfp_next_content"), false);
			} else {
				$next_content->setCaption($this->txt("xhfp_finish"), false);
			}
			$next_content->setUrl($this->ctrl->getLinkTarget($this, self::CMD_SHOW_CONTENTS));
			$next_content->setDisabled(true);
			$next_content->setId("xhfp_next_content_bottom"); // Set id for bottom toolbar
			$this->toolbar->addButtonInstance($next_content);

			$this->show(sprintf($this->txt("xhfp_content_count"), ($index + 1), $count) . "<br>" . ilH5PShowContent::getInstance()
					->getH5PContentIntegration($h5p_content) . "<br>" . $this->toolbar->getHTML());

			$next_content->setId("xhfp_next_content_top"); // Set id for top toolbar (Main Template)
		} else {
			// No content without results available
			$this->show($this->txt("xhfp_solved_all_contents"));
		}
	}


	/**
	 *
	 */
	protected function showContent() {
		$this->tabs_gui->activateTab(self::TAB_SHOW_CONTENTS);

		$h5p_content = ilH5PContent::getCurrentContent();

		$this->ctrl->setParameter($this, "xhfp_content", $h5p_content->getContentId());

		if (ilObjH5PAccess::hasWriteAccess() && !$this->hasResults()) {
			$edit_content = ilLinkButton::getInstance();
			$edit_content->setCaption($this->txt("xhfp_edit"), false);
			$edit_content->setUrl($this->ctrl->getLinkTarget($this, self::CMD_EDIT_CONTENT));
			$this->toolbar->addButtonInstance($edit_content);

			$delete_content = ilLinkButton::getInstance();
			$delete_content->setCaption($this->txt("xhfp_delete"), false);
			$delete_content->setUrl($this->ctrl->getLinkTarget($this, self::CMD_DELETE_CONTENT_CONFIRM));
			$this->toolbar->addButtonInstance($delete_content);
		}

		$this->show(ilH5PShowContent::getInstance()->getH5PContentIntegration($h5p_content) . "<br>" . $this->toolbar->getHTML());
	}


	/**
	 *
	 */
	protected function results() {
		$this->tabs_gui->activateTab(self::TAB_RESULTS);

		$results_table = new ilH5PResultsTableGUI($this, self::CMD_MANAGE_CONTENTS);

		$this->show($results_table->getHTML());
	}


	/**
	 *
	 */
	protected function deleteResultsConfirm() {
		$this->tabs_gui->activateTab(self::TAB_RESULTS);

		$user_id = filter_input(INPUT_GET, "xhfp_user");
		$user = new ilObjUser($user_id);

		$this->ctrl->setParameterByClass(ilH5PActionGUI::class, "xhfp_user", $user->getId());

		$confirmation = new ilConfirmationGUI();

		$confirmation->setFormAction(ilH5PActionGUI::getFormAction(ilH5PActionGUI::H5P_ACTION_RESULTS_DELETE, $this, self::CMD_RESULTS));

		$confirmation->setHeaderText(sprintf($this->txt("xhfp_delete_results_confirm"), $user->getFullname()));

		$confirmation->setConfirm($this->txt("xhfp_delete"), ilH5PActionGUI::CMD_H5P_ACTION);
		$confirmation->setCancel($this->txt("xhfp_cancel"), ilH5PActionGUI::CMD_CANCEL);

		$this->show($confirmation->getHTML());
	}


	/**
	 *
	 */
	protected function getSettingsForm() {
		$form = new ilPropertyFormGUI();

		$form->setFormAction($this->ctrl->getFormAction($this));

		$form->setTitle($this->txt("xhfp_settings"));

		$form->addCommandButton(self::CMD_SETTINGS_STORE, $this->txt("xhfp_save"));
		$form->addCommandButton(self::CMD_MANAGE_CONTENTS, $this->txt("xhfp_cancel"));

		$title = new ilTextInputGUI($this->txt("xhfp_title"), "xhfp_title");
		$title->setRequired(true);
		$title->setValue($this->object->getTitle());
		$form->addItem($title);

		$description = new ilTextAreaInputGUI($this->txt("xhfp_description"), "xhfp_description");
		$description->setValue($this->object->getLongDescription());
		$form->addItem($description);

		$online = new ilCheckboxInputGUI($this->txt("xhfp_online"), "xhfp_online");
		$online->setChecked($this->object->isOnline());
		$form->addItem($online);

		return $form;
	}


	/**
	 *
	 */
	protected function settings() {
		$this->tabs_gui->activateTab(self::TAB_SETTINGS);

		$form = $this->getSettingsForm();

		$this->show($form->getHTML());
	}


	/**
	 *
	 */
	protected function settingsStore() {
		$this->tabs_gui->activateTab(self::TAB_SETTINGS);

		$form = $this->getSettingsForm();

		$form->setValuesByPost();

		if (!$form->checkInput()) {
			$this->show($form->getHTML());

			return;
		}

		$title = $form->getInput("xhfp_title");
		$this->object->setTitle($title);

		$description = $form->getInput("xhfp_description");
		$this->object->setDescription($description);

		$online = boolval($form->getInput("xhfp_online"));
		$this->object->setOnline($online);

		$this->object->update();

		ilUtil::sendSuccess($this->txt("xhfp_settings_saved"), true);

		$this->show($form->getHTML());

		$this->ctrl->redirect($this, self::CMD_MANAGE_CONTENTS);
	}


	/**
	 *
	 */
	protected function setTabs() {
		$this->tabs_gui->addTab(self::TAB_SHOW_CONTENTS, $this->txt("xhfp_show_contents"), $this->ctrl->getLinkTarget($this, self::CMD_SHOW_CONTENTS));

		if (ilObjH5PAccess::hasWriteAccess()) {
			$this->tabs_gui->addTab(self::TAB_CONTENTS, $this->txt("xhfp_contents"), $this->ctrl->getLinkTarget($this, self::CMD_MANAGE_CONTENTS));

			$this->tabs_gui->addTab(self::TAB_RESULTS, $this->txt("xhfp_results"), $this->ctrl->getLinkTarget($this, self::CMD_RESULTS));

			$this->tabs_gui->addTab(self::TAB_SETTINGS, $this->txt("xhfp_settings"), $this->ctrl->getLinkTarget($this, self::CMD_SETTINGS));
		}

		if (ilObjH5PAccess::hasEditPermissionAccess()) {
			$this->tabs_gui->addTab(self::TAB_PERMISSIONS, $this->lng->txt(self::TAB_PERMISSIONS), $this->ctrl->getLinkTargetByClass([
				self::class,
				ilPermissionGUI::class,
			], self::CMD_PERMISSIONS));
		}

		$this->tabs_gui->manual_activation = true; // Show all tabs as links when no activation
	}


	/**
	 * @return string
	 */
	static function getCmd() {
		if (ilObjH5PAccess::hasWriteAccess()) {
			return self::CMD_MANAGE_CONTENTS;
		} else {
			return self::CMD_SHOW_CONTENTS;
		}
	}


	/**
	 * @return string
	 */
	function getAfterCreationCmd() {
		return self::getCmd();
	}


	/**
	 * @return string
	 */
	function getStandardCmd() {
		return self::getCmd();
	}
}
