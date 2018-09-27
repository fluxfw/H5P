<?php

namespace srag\Plugins\H5P\GUI;

use H5PEditorEndpoints;
use ilFileInputGUI;
use ilH5PConfigGUI;
use ilH5PPlugin;
use ilPropertyFormGUI;
use srag\Plugins\H5P\Utitls\H5PTrait;

/**
 * Class H5PUploadLibraryFormGUI
 *
 * @package srag\Plugins\H5P\GUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class H5PUploadLibraryFormGUI extends ilPropertyFormGUI {

	use H5PTrait;
	const PLUGIN_CLASS_NAME = ilH5PPlugin::class;
	/**
	 * @var ilH5PConfigGUI
	 */
	protected $parent;


	/**
	 * H5PUploadLibraryFormGUI constructor
	 *
	 * @param ilH5PConfigGUI $parent
	 */
	public function __construct(ilH5PConfigGUI $parent) {
		parent::__construct();

		$this->parent = $parent;

		$this->initForm();
	}


	/**
	 *
	 */
	protected function initForm() {
		$this->setFormAction(self::dic()->ctrl()->getFormAction($this->parent));

		$this->setTitle(self::plugin()->translate("xhfp_upload_library"));

		$this->addCommandButton(ilH5PConfigGUI::CMD_UPLOAD_LIBRARY, self::plugin()->translate("xhfp_upload"));

		$upload_library = new ilFileInputGUI(self::plugin()->translate("xhfp_library"), "xhfp_library");
		$upload_library->setRequired(true);
		$upload_library->setSuffixes([ "h5p" ]);
		$this->addItem($upload_library);
	}


	/**
	 *
	 */
	public function uploadLibrary() {
		$file_path = $this->getInput("xhfp_library")["tmp_name"];

		ob_start(); // prevent output from editor

		self::h5p()->editor()->ajax->action(H5PEditorEndpoints::LIBRARY_UPLOAD, "", $file_path, NULL);

		ob_end_clean();
	}
}
