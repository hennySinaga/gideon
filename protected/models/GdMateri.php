<?php

/**
 * This is the model class for table "gd_materi".
 *
 * The followings are the available columns in table 'gd_materi':
 * @property integer $id_materi
 * @property integer $id_topik
 * @property string $deskripsi
 * @property string $file_materi
 */
class GdMateri extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gd_materi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_topik, deskripsi, file_materi', 'required'),
			array('id_topik', 'numerical', 'integerOnly'=>true),
			array('deskripsi, file_materi', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_materi, id_topik, deskripsi, file_materi', 'safe', 'on'=>'search'),
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
			'id_materi' => 'Id Materi',
			'id_topik' => 'Id Topik',
			'deskripsi' => 'Deskripsi',
			'file_materi' => 'File Materi',
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

		$criteria->compare('id_materi',$this->id_materi);
		$criteria->compare('id_topik',$this->id_topik);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('file_materi',$this->file_materi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GdMateri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
