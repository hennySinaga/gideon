<?php

/**
 * This is the model class for table "gd_forum_detail".
 *
 * The followings are the available columns in table 'gd_forum_detail':
 * @property integer $id_forum_detail
 * @property integer $id_forum
 * @property integer $id_user
 * @property string $postingan
 * @property string $lampiran
 */
class GdForumDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_forum_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_forum_detail, id_forum, id_user, postingan, lampiran', 'required'),
			array('id_forum_detail, id_forum, id_user', 'numerical', 'integerOnly'=>true),
			array('postingan, lampiran', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_forum_detail, id_forum, id_user, postingan, lampiran', 'safe', 'on'=>'search'),
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
			'id_forum_detail' => 'Id Forum Detail',
			'id_forum' => 'Id Forum',
			'id_user' => 'Id User',
			'postingan' => 'Postingan',
			'lampiran' => 'Lampiran',
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

		$criteria->compare('id_forum_detail',$this->id_forum_detail);
		$criteria->compare('id_forum',$this->id_forum);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('postingan',$this->postingan,true);
		$criteria->compare('lampiran',$this->lampiran,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdForumDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
