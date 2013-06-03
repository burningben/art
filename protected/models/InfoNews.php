<?php

/**
 * This is the model class for table "art_info_news".
 *
 * The followings are the available columns in table 'art_info_news':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $view_img_src
 * @property integer $status
 * @property integer $like
 * @property integer $view
 * @property string $create_time
 * @property string $update_time
 */
class InfoNews extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InfoNews the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'art_info_news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, status,', 'required'),
			array('status, like, view', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
			array('view_img_src', 'length', 'max'=>200),
			array('update_time,top_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, content, view_img_src, status, like, view, create_time, update_time, top_time', 'safe', 'on'=>'search'),
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
			'title' => '标题',
			'content' => '内容',
			'view_img_src' => '列表展示图片地址',
			'status' => '状态',
			'like' => '赞',
			'view' => '点击量',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'top_time' => '置顶时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('view_img_src',$this->view_img_src,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('like',$this->like);
		$criteria->compare('view',$this->view);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('top_time',$this->top_time,true);
		$criteria->addCondition('status',1,2);
		$criteria->order='status DESC,top_time DESC,create_time DESC';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}