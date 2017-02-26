<?php

/**
 * This is the model class for table "gd_ujian".
 *
 * The followings are the available columns in table 'gd_ujian':
 * @property integer $id_ujian
 * @property string $tanggal
 * @property integer $id_mtpelajaran
 * @property string $deskrispi
 * @property string $file_soal_ujian
 */
class GdUjian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_ujian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mtpelajaran, file_soal_ujian', 'required'),
			array('id_mtpelajaran', 'numerical', 'integerOnly'=>true),
			array('deskrispi, file_soal_ujian', 'length', 'max'=>255),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ujian, tanggal, id_mtpelajaran, deskrispi, file_soal_ujian', 'safe', 'on'=>'search'),
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
			'id_ujian' => 'Id Ujian',
			'tanggal' => 'Tanggal',
			'id_mtpelajaran' => 'Id Mtpelajaran',
			'deskrispi' => 'Deskrispi',
			'file_soal_ujian' => 'File Soal Ujian',
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

		$criteria->compare('id_ujian',$this->id_ujian);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('id_mtpelajaran',$this->id_mtpelajaran);
		$criteria->compare('deskrispi',$this->deskrispi,true);
		$criteria->compare('file_soal_ujian',$this->file_soal_ujian,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdUjian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
