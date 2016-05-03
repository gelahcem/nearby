<?php

class ImportLocationsCommand extends CConsoleCommand
{
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	
	/**
	* method that will simply fetch the contents of the file
	**/
	private function getData()
	{
		$file = __DIR__ . '/../data/parks.json';
		return CJSON::decode(file_get_contents($file));
	}
	
	/**
	* method that will perform the import
	**/
	public function actionImportLocations() 
	{
		$cs->registerScript('loadMap', "Main.loadMap();");
		echo "Loading Data...\n";
		$data = $this->getData();
		
		echo "Truncating old data...\n";
		Locations::model()->deleteAll();
		
		echo "Importing Data...\n";
		foreach($data as $id=>$content)
		{
		$model = new Locations;
		$model->attributes = $content;
		$model->save();
		}
	}
}