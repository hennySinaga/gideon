<?php

/**
 * This is the model class for table "gd_absensi".
 *
 * The followings are the available columns in table 'gd_absensi':
 * @property integer $id_absen
 * @property string $tanggal
 * @property string $NIS
 * @property string $status_kehadiran
 */
class GdAbsensi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_absensi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_absen, NIS', 'required'),
			array('id_absen', 'numerical', 'integerOnly'=>true),
			array('NIS', 'length', 'max'=>255),
			array('status_kehadiran', 'length', 'max'=>1),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_absen, tanggal, NIS, status_kehadiran', 'safe', 'on'=>'search'),
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
			'id_absen' => 'Id Absen',
			'tanggal' => 'Tanggal',
			'NIS' => 'Nis',
			'status_kehadiran' => 'Status Kehadiran',
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

		$criteria->compare('id_absen',$this->id_absen);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('NIS',$this->NIS,true);
		$criteria->compare('status_kehadiran',$this->status_kehadiran,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdAbsensi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
