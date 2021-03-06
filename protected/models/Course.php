<?php

/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property integer $id
 * @property string $title
 * @property string $type_of_publication
 * @property string $org
 * @property string $source
 * @property integer $user_id
 * @property string $username
 * @property string $author
 * @property integer $publish
 * @property string $desc
 */
class Course extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, type_of_publication, org, source, user_id, username, author, publish', 'required'),
			array('user_id, publish', 'numerical', 'integerOnly'=>true),
			array('title, username, author, desc', 'length', 'max'=>100),
			array('type_of_publication', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, type_of_publication, org, source, user_id, username, author, publish, desc', 'safe', 'on'=>'search'),
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
			'lectures1'=>array(self::MANY_MANY, 'Lecture',
				'link_practica(course_id, lecture_id)'),
			'lectures'=>array(self::BELONGS_TO, 'link_practica',

				'link_practica(course_id, lecture_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'type_of_publication' => 'Type Of Publication',
			'org' => 'Org',
			'source' => 'Source',
			'user_id' => 'User',
			'username' => 'Username',
			'author' => 'Author',
			'publish' => 'Publish',
			'desc' => 'Desc',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('type_of_publication',$this->type_of_publication,true);
		$criteria->compare('org',$this->org,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('publish',$this->publish);
		//$criteria->compare('desc',$this->desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Course the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
