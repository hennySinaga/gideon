<?php

/**
 * This is the model class for table "gd_forum".
 *
 * The followings are the available columns in table 'gd_forum':
 * @property integer $id_forum
 * @property string $tanggal
 * @property integer $id_user_pembuat
 * @property integer $id_mtpelajaran
 * @property string $judul
 */
class GdForum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_forum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_forum, id_user_pembuat, id_mtpelajaran, judul', 'required'),
			array('id_forum, id_user_pembuat, id_mtpelajaran', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>255),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_forum, tanggal, id_user_pembuat, id_mtpelajaran, judul', 'safe', 'on'=>'search'),
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
			'id_forum' => 'Id Forum',
			'tanggal' => 'Tanggal',
			'id_user_pembuat' => 'Id User Pembuat',
			'id_mtpelajaran' => 'Id Mtpelajaran',
			'judul' => 'Judul',
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

		$criteria->compare('id_forum',$this->id_forum);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('id_user_pembuat',$this->id_user_pembuat);
		$criteria->compare('id_mtpelajaran',$this->id_mtpelajaran);
		$criteria->compare('judul',$this->judul,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdForum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
