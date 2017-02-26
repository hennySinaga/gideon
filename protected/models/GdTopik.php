<?php

/**
 * This is the model class for table "gd_topik".
 *
 * The followings are the available columns in table 'gd_topik':
 * @property integer $id_topik
 * @property integer $id_matapelajaran
 * @property string $topik
 */
class GdTopik extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_topik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_matapelajaran, topik', 'required'),
			array('id_matapelajaran', 'numerical', 'integerOnly'=>true),
			array('topik', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_topik, id_matapelajaran, topik', 'safe', 'on'=>'search'),
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
			'id_topik' => 'Id Topik',
			'id_matapelajaran' => 'Mata Pelajaran',
			'topik' => 'Topik',
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

		$criteria->compare('id_topik',$this->id_topik);
		$criteria->compare('id_matapelajaran',$this->id_matapelajaran);
		$criteria->compare('topik',$this->topik,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdTopik the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
