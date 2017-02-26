<?php

/**
 * This is the model class for table "gd_guru".
 *
 * The followings are the available columns in table 'gd_guru':
 * @property integer $id_user
 * @property integer $NIP
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $foto
 */
class GdGuru extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_guru';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, NIP, nama', 'required'),
			array('id_user, NIP', 'numerical', 'integerOnly'=>true),
			array('nama, alamat, telepon, tempat_lahir, foto', 'length', 'max'=>255),
			array('jenis_kelamin, agama', 'length', 'max'=>9),
			array('tanggal_lahir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, NIP, nama, alamat, telepon, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, foto', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'NIP' => 'Nip',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'telepon' => 'Telepon',
			'jenis_kelamin' => 'Jenis Kelamin',
			'agama' => 'Agama',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'foto' => 'Foto',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('NIP',$this->NIP);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdGuru the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
