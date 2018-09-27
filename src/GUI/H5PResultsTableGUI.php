<?php

namespace srag\Plugins\H5P\GUI;

use Exception;
use ilAdvancedSelectionListGUI;
use ilCSVWriter;
use ilExcel;
use ilH5PPlugin;
use ilObjH5PAccess;
use ilObjH5PGUI;
use ilObjUser;
use ilTable2GUI;
use srag\Plugins\H5P\ActiveRecord\H5PContent;
use srag\Plugins\H5P\ActiveRecord\H5PResult;
use srag\Plugins\H5P\ActiveRecord\H5PSolveStatus;
use srag\Plugins\H5P\Utitls\H5PTrait;

/**
 * Class H5PResultsTableGUI
 *
 * @package srag\Plugins\H5P\GUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class H5PResultsTableGUI extends ilTable2GUI {

	use H5PTrait;
	const PLUGIN_CLASS_NAME = ilH5PPlugin::class;
	/**
	 * @var H5PContent[]
	 */
	protected $contents;
	/**
	 * @var int
	 */
	protected $obj_id;
	/**
	 * @var array
	 */
	protected $results;


	/**
	 * H5PResultsTableGUI constructor
	 *
	 * @param ilObjH5PGUI $parent
	 * @param string      $parent_cmd
	 */
	public function __construct(ilObjH5PGUI $parent, $parent_cmd) {
		parent::__construct($parent, $parent_cmd);

		$this->obj_id = $this->getParentObject()->object->getId();

		$this->initTable();
	}


	/**
	 *
	 */
	protected function initTable() {
		$parent = $this->getParentObject();

		$this->setFormAction(self::dic()->ctrl()->getFormAction($parent));

		$this->setTitle(self::plugin()->translate("xhfp_results"));

		$this->initFilter();

		$this->initData();

		$this->initColumns();

		$this->initExport();

		$this->setRowTemplate("results_table_row.html", self::plugin()->directory());
	}


	/**
	 *
	 */
	public function initFilter() {

	}


	/**
	 *
	 */
	protected function initData() {
		$this->contents = H5PContent::getContentsByObject($this->obj_id);

		$this->results = [];

		$h5p_solve_statuses = H5PSolveStatus::getByObject($this->obj_id);

		foreach ($h5p_solve_statuses as $h5p_solve_status) {
			$user_id = $h5p_solve_status->getUserId();

			if (!isset($this->results[$user_id])) {
				$this->results[$user_id] = [
					"user_id" => $user_id,
					"finished" => $h5p_solve_status->isFinished()
				];
			}

			foreach ($this->contents as $h5p_content) {
				$content_key = "content_" . $h5p_content->getContentId();

				$h5p_result = H5PResult::getResultByUserContent($user_id, $h5p_content->getContentId());

				if ($h5p_result !== NULL) {
					$this->results[$user_id][$content_key] = ($h5p_result->getScore() . "/" . $h5p_result->getMaxScore());
				} else {
					$this->results[$user_id][$content_key] = NULL;
				}
			}
		}

		$this->setData($this->results);
	}


	/**
	 *
	 */
	protected function initColumns() {
		$this->addColumn(self::plugin()->translate("xhfp_user"));

		foreach ($this->contents as $h5p_content) {
			$this->addColumn($h5p_content->getTitle());
		}

		$this->addColumn(self::plugin()->translate("xhfp_finished"));
		$this->addColumn(self::plugin()->translate("xhfp_actions"));
	}


	/**
	 *
	 */
	protected function initExport() {

	}


	/**
	 * @param array $result
	 */
	protected function fillRow($result) {
		$parent = $this->getParentObject();

		self::dic()->ctrl()->setParameter($parent, "xhfp_user", $result["user_id"]);

		try {
			$user = new ilObjUser($result["user_id"]);
		} catch (Exception $ex) {
			// User not exists anymore
			$user = NULL;
		}
		$this->tpl->setVariable("USER", $user !== NULL ? $user->getFullname() : "");

		$this->tpl->setCurrentBlock("contentBlock");
		foreach ($this->contents as $h5p_content) {
			$content_key = "content_" . $h5p_content->getContentId();

			if ($result[$content_key] !== NULL) {
				$this->tpl->setVariable("POINTS", $result[$content_key]);
			} else {
				$this->tpl->setVariable("POINTS", self::plugin()->translate("xhfp_no_result"));
			}
			$this->tpl->parseCurrentBlock();
		}

		$actions = new ilAdvancedSelectionListGUI();
		$actions->setListTitle(self::plugin()->translate("xhfp_actions"));

		if (ilObjH5PAccess::hasWriteAccess()) {
			$actions->addItem(self::plugin()->translate("xhfp_delete"), "", self::dic()->ctrl()
				->getLinkTarget($parent, ilObjH5PGUI::CMD_DELETE_RESULTS_CONFIRM));
		}

		$this->tpl->setVariable("FINISHED", self::plugin()->translate($result["finished"] ? "xhfp_yes" : "xhfp_no"));

		$this->tpl->setVariable("ACTIONS", $actions->getHTML());

		self::dic()->ctrl()->setParameter($parent, "xhfp_user", NULL);
	}


	/**
	 * @param ilCSVWriter $csv
	 */
	protected function fillHeaderCSV($csv) {
		parent::fillHeaderCSV($csv);
	}


	/**
	 * @param ilCSVWriter $csv
	 * @param array       $result
	 */
	protected function fillRowCSV($csv, $result) {
		parent::fillRowCSV($csv, $result);
	}


	/**
	 * @param ilExcel $excel
	 * @param int     $row
	 */
	protected function fillHeaderExcel(ilExcel $excel, &$row) {
		parent::fillHeaderExcel($excel, $row);
	}


	/**
	 * @param ilExcel $excel
	 * @param int     $row
	 * @param array   $result
	 */
	protected function fillRowExcel(ilExcel $excel, &$row, $result) {
		parent::fillRowExcel($excel, $row, $result);
	}
}
