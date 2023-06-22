<?php
namespace App\Domain\Initiative\Queries;

use BlueFission\Connections\Database\MysqlLink;
use App\Domain\Initiative\Models\InitiativeModel as Model;
use App\Domain\Initiative\Queries\IInitiativesByPrerequisitesQuery;

class InitiativesByPrerequisitesQuerySql implements IInitiativesByPrerequisitesQuery {
	private $_model;

	public function __construct( MysqlLink $link, Model $model )
	{
		$link->open();

		$this->_model = $model;
	}

	public function fetch($user_id) 
	{
		$model = $this->_model;
		
		$model->read();
		$data = $model->result()->toArray();
		return $data;
	}
}