<?php
class EClientAutoCompleteAction extends CAction
{
    public $model;
    public $attribute;
    private $results = array();
 
    public function run()
    {
        if(isset($this->model) && isset($this->attribute)) {
            $criteria = new CDbCriteria();
            $criteria->compare($this->attribute, $_GET['term'], true);
		    $model = new $this->model;
            foreach($model->findAll($criteria) as $m)
            {
                $this->results[] = array(
				'label'=>$m->Nom .' '. $m->Prenom,
				'value'=>$m->Nom .' '. $m->Prenom,
				'id'=>$m->id,
				'nom'=>$m->Nom,
				'prenom'=>$m->Prenom,
				'reste'=>$m->Reste
				);
            }
 
        }
        echo CJSON::encode($this->results);
    }
}
?>