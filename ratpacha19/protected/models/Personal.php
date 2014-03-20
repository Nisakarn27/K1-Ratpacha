<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property integer $id
 * @property string $image
 * @property string $name
 * @property string $specification
 * @property string $position
 * @property integer $group_id
 */
class Personal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, position, group_id', 'required'),
			array('group_id', 'numerical', 'integerOnly'=>true),
			array('image', 'length', 'max'=>45),
			array('image', 'file', 'types'=>'jpg,gif,png,jpeg','allowEmpty'=>true, 'on'=>'update'),
			array('name,header, specification,create_date, position', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image, name, specification, position, group_id', 'safe', 'on'=>'search'),
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
				'group'=>array(self::BELONGS_TO, 'Group', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'image' => 'รูปภาพ',
			'name' => 'ชื่อ',
				'create_date'=>'วันที่ทำการเพิ่ม',
			'specification' => 'วุฒิการศึกษา',
			'position' => 'ตำแหน่ง',
			'group_id' => 'กลุ่มสาระการเรียนรู้',
				'header' => 'ปฏิบัติหน้าที่',
				
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

		$criteria->compare('id',$this->id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('header',$this->header,true);
		$criteria->compare('specification',$this->specification,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('group_id',$this->group_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
