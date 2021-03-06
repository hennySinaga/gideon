<?php

/**
 * This is the model class for table "gd_jawaban".
 *
 * The followings are the available columns in table 'gd_jawaban':
 * @property integer $id_jawaban
 * @property integer $id_murid
 * @property string $tipe_soal
 * @property integer $id_soal
 * @property string $file_jawaban
 */
class GdJawaban extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_jawaban';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_jawaban, id_murid, tipe_soal, id_soal, file_jawaban', 'required'),
			array('id_jawaban, id_murid, id_soal', 'numerical', 'integerOnly'=>true),
			array('tipe_soal', 'length', 'max'=>5),
			array('file_jawaban', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_jawaban, id_murid, tipe_soal, id_soal, file_jawaban', 'safe', 'on'=>'search'),
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
			'id_jawaban' => 'Id Jawaban',
			'id_murid' => 'Id Murid',
			'tipe_soal' => 'Tipe Soal',
			'id_soal' => 'Id Soal',
			'file_jawaban' => 'File Jawaban',
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

		$criteria->compare('id_jawaban',$this->id_jawaban);
		$criteria->compare('id_murid',$this->id_murid);
		$criteria->compare('tipe_soal',$this->tipe_soal,true);
		$criteria->compare('id_soal',$this->id_soal);
		$criteria->compare('file_jawaban',$this->file_jawaban,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdJawaban the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
