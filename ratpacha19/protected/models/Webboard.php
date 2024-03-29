<?php

/**
 * This is the model class for table "webboard".
 *
 * The followings are the available columns in table 'webboard':
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $detail
 * @property string $post_date
 * @property string $editpost_date
 * @property string $name_user_post
 */
class Webboard extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'webboard';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, detail', 'required'),
			array('image, name_user_post', 'length', 'max'=>45),
			array('image', 'file', 'types'=>'jpg,gif,png,jpeg','allowEmpty'=>true, 'on'=>'update'),
			array('title', 'length', 'max'=>100),
			array('post_date, editpost_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image, title, detail, post_date, editpost_date, name_user_post', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'comments' => array(self::HAS_MANY, 'Comment', 'webboard_id'),
			
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
			'title' => 'หัวข้อ',
			'detail' => 'เนื้อหน้า',
			'post_date' => 'วันที่โพสต์',
			'editpost_date' => 'วันที่แก้ไขโพสต์',
			'name_user_post' => 'โพสต์โดย',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('post_date',$this->post_date,true);
		$criteria->compare('editpost_date',$this->editpost_date,true);
		$criteria->compare('name_user_post',$this->name_user_post,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Webboard the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
