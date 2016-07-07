<?php

/**
 * This is the model class for table "{{tongji_click}}".
 *
 * The followings are the available columns in table '{{tongji_click}}':
 * @property string $id
 * @property string $url
 * @property double $x
 * @property double $y
 * @property string $update_time
 * @property integer $update_user_id
 * @property string $create_time
 * @property integer $create_user_id
 */
class TongjiClick extends PSActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tongji_click}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('update_user_id, create_user_id', 'numerical', 'integerOnly'=>true),
			array('x, y', 'numerical'),
			array('url', 'length', 'max'=>50),
			array('update_time, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, x, y, update_time, update_user_id, create_time, create_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url' => 'Url',
			'x' => 'X',
			'y' => 'Y',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('x',$this->x);
		$criteria->compare('y',$this->y);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TongjiClick the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
