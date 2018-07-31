<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $birthdate
 * @property int $sex
 * @property int $civil_status
 * @property string $place_of_birth
 * @property string $nationality
 * @property string $religion
 * @property string $unitno_address
 * @property string $bldng_name
 * @property string $house_bldng_no
 * @property string $street
 * @property string $subdv_vill
 * @property string $barangay
 * @property string $city
 * @property string $province
 * @property int $zip
 * @property string $email
 * @property string $phone_no
 *
 * @property MedicalRecord[] $medicalRecords
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['first_name', 'last_name', 'birthdate', 'sex', 'civil_status', 'place_of_birth', 'nationality', 'religion', 'province', 'zip', 'email', 'phone_no'], 'required'],
        [['birthdate'], 'safe'],
        [['unitno_address', 'house_bldng_no'], 'string'],
        [['zip'], 'integer'],
        [['first_name', 'middle_name', 'last_name', 'place_of_birth', 'nationality', 'religion', 'bldng_name', 'street', 'subdv_vill', 'barangay', 'city', 'province', 'phone_no'], 'string', 'max' => 45],
        [['sex', 'civil_status'], 'string', 'max' => 4],
        [['email'], 'string', 'max' => 85],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        'id' => 'ID',
        'first_name' => 'First Name',
        'middle_name' => 'Middle Name',
        'last_name' => 'Last Name',
        'birthdate' => 'Birthdate (mm/dd/yyyy)',
        'sex' => 'Sex',
        'civil_status' => 'Civil Status',
        'place_of_birth' => 'Place Of Birth',
        'nationality' => 'Nationality',
        'religion' => 'Religion',
        'unitno_address' => 'Unit No.',
        'bldng_name' => 'Bldng Name',
        'house_bldng_no' => 'House/Building No',
        'street' => 'Street',
        'subdv_vill' => 'Subdivision/Village',
        'barangay' => 'Barangay',
        'city' => 'City',
        'province' => 'Province',
        'zip' => 'Zip',
        'email' => 'Email',
        'phone_no' => 'Phone No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['patient_id' => 'id']);
    }
    public function getFullName() {
        return $this->first_name . ' ' . substr($this->middle_name, 0, 1). '. ' . $this->last_name;
 }
}
