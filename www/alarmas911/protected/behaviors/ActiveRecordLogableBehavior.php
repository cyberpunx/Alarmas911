<?php

class ActiveRecordLogableBehavior extends CActiveRecordBehavior
{
    private $_oldattributes = array();
 
    public function afterSave($event)
    {
        if (!$this->Owner->isNewRecord) {
 
            // new attributes
            $newattributes = $this->Owner->getAttributes();
            $oldattributes = $this->getOldAttributes();
 
            // compare old and new
            foreach ($newattributes as $name => $value) {
                if (!empty($oldattributes)) {
                    $old = $oldattributes[$name];
                    $new = $newattributes[$name];
                } else {
                    $old = '';
                }
 
                if ($value != $old) {
                    //$changes = $name . ' ('.$old.') => ('.$value.'), ';
 
                    $log=new ActiveRecordLog;
                    $log->description=  'Usuario ' . Yii::app()->user->Name 
                                            . ' Modifico ' . $name . ' por ' 
                                            . get_class($this->Owner) 
                                            . '[' . $this->Owner->getPrimaryKey() .'].';
                    $log->action=       'MODIFICACIÓN';
                    $log->model=        get_class($this->Owner);
                    $log->idModel=      $this->Owner->getPrimaryKey();
                    $log->field=        $name;
                    $log->creationdate= new CDbExpression('NOW()');
                    $log->userid=       Yii::app()->user->id;
                    $log->oldValue=     $old;
                    $log->newValue=     $new;
                    $log->save();
                }
            }
        } else {
            $log=new ActiveRecordLog;
            
            $log->description=  'Usuario ' . Yii::app()->user->Name 
                                    . ' creo ' . get_class($this->Owner) 
                                    . '[' . $this->Owner->getPrimaryKey() .'].';
            $log->action=       'CREACIÓN';
            $log->model=        get_class($this->Owner);
            $log->idModel=      $this->Owner->getPrimaryKey();
            $log->field=        '';
            
            $log->creationdate= new CDbExpression('NOW()');
            $log->userid=       Yii::app()->user->id;

            $log->save();
        }
    }
 
    public function afterDelete($event)
    {
        $log=new ActiveRecordLog;
        $log->description=  'Usuario ' . Yii::app()->user->Name . ' Borro ' 
                                . get_class($this->Owner) 
                                . '[' . $this->Owner->getPrimaryKey() .'].';
        $log->action=       'BORRADO';
        $log->model=        get_class($this->Owner);
        $log->idModel=      $this->Owner->getPrimaryKey();
        $log->field=        '';
        $log->creationdate= new CDbExpression('NOW()');
        $log->userid=       Yii::app()->user->id;
        $log->save();
    }
 
    public function afterFind($event)
    {
        // Save old values
        $this->setOldAttributes($this->Owner->getAttributes());
    }
 
    public function getOldAttributes()
    {
        return $this->_oldattributes;
    }
 
    public function setOldAttributes($value)
    {
        $this->_oldattributes=$value;
    }
}