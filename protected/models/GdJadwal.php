<?php

/**
 * This is the model class for table "gd_jadwal".
 *
 * The followings are the available columns in table 'gd_jadwal':
 * @property integer $id_jadwal
 * @property string $hari
 * @property string $waktu_mulai
 * @property string $waktu_selesai
 * @property string $lokasi_kelas
 * @property string $NIP
 * @property integer $id_kelas
 * @property integer $id_mtpelajaran
 */
class GdJadwal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_jadwal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_jadwal, hari, waktu_mulai', 'required'),
			array('id_jadwal, id_kelas, id_mtpelajaran', 'numerical', 'integerOnly'=>true),
			array('hari', 'length', 'max'=>6),
			array('lokasi_kelas, NIP', 'length', 'max'=>255),
			array('waktu_selesai', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_jadwal, hari, waktu_mulai, waktu_selesai, lokasi_kelas, NIP, id_kelas, id_mtpelajaran', 'safe', 'on'=>'search'),
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
			'id_jadwal' => 'Id Jadwal',
			'hari' => 'Hari',
			'waktu_mulai' => 'Waktu Mulai',
			'waktu_selesai' => 'Waktu Selesai',
			'lokasi_kelas' => 'Lokasi Kelas',
			'NIP' => 'Nip',
			'id_kelas' => 'Id Kelas',
			'id_mtpelajaran' => 'Id Mtpelajaran',
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

		$criteria->compare('id_jadwal',$this->id_jadwal);
		$criteria->compare('hari',$this->hari,true);
		$criteria->compare('waktu_mulai',$this->waktu_mulai,true);
		$criteria->compare('waktu_selesai',$this->waktu_selesai,true);
		$criteria->compare('lokasi_kelas',$this->lokasi_kelas,true);
		$criteria->compare('NIP',$this->NIP,true);
		$criteria->compare('id_kelas',$this->id_kelas);
		$criteria->compare('id_mtpelajaran',$this->id_mtpelajaran);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdJadwal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
