<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'setting_access',
            ],
            [
                'id'    => 18,
                'title' => 'country_create',
            ],
            [
                'id'    => 19,
                'title' => 'country_edit',
            ],
            [
                'id'    => 20,
                'title' => 'country_show',
            ],
            [
                'id'    => 21,
                'title' => 'country_delete',
            ],
            [
                'id'    => 22,
                'title' => 'country_access',
            ],
            [
                'id'    => 23,
                'title' => 'user_setting_create',
            ],
            [
                'id'    => 24,
                'title' => 'user_setting_edit',
            ],
            [
                'id'    => 25,
                'title' => 'user_setting_show',
            ],
            [
                'id'    => 26,
                'title' => 'user_setting_delete',
            ],
            [
                'id'    => 27,
                'title' => 'user_setting_access',
            ],
            [
                'id'    => 28,
                'title' => 'student_create',
            ],
            [
                'id'    => 29,
                'title' => 'student_edit',
            ],
            [
                'id'    => 30,
                'title' => 'student_show',
            ],
            [
                'id'    => 31,
                'title' => 'student_delete',
            ],
            [
                'id'    => 32,
                'title' => 'student_access',
            ],
            [
                'id'    => 33,
                'title' => 'university_create',
            ],
            [
                'id'    => 34,
                'title' => 'university_edit',
            ],
            [
                'id'    => 35,
                'title' => 'university_show',
            ],
            [
                'id'    => 36,
                'title' => 'university_delete',
            ],
            [
                'id'    => 37,
                'title' => 'university_access',
            ],
            [
                'id'    => 38,
                'title' => 'university_partnership_create',
            ],
            [
                'id'    => 39,
                'title' => 'university_partnership_edit',
            ],
            [
                'id'    => 40,
                'title' => 'university_partnership_show',
            ],
            [
                'id'    => 41,
                'title' => 'university_partnership_delete',
            ],
            [
                'id'    => 42,
                'title' => 'university_partnership_access',
            ],
            [
                'id'    => 43,
                'title' => 'program_create',
            ],
            [
                'id'    => 44,
                'title' => 'program_edit',
            ],
            [
                'id'    => 45,
                'title' => 'program_show',
            ],
            [
                'id'    => 46,
                'title' => 'program_delete',
            ],
            [
                'id'    => 47,
                'title' => 'program_access',
            ],
            [
                'id'    => 48,
                'title' => 'tag_create',
            ],
            [
                'id'    => 49,
                'title' => 'tag_edit',
            ],
            [
                'id'    => 50,
                'title' => 'tag_show',
            ],
            [
                'id'    => 51,
                'title' => 'tag_delete',
            ],
            [
                'id'    => 52,
                'title' => 'tag_access',
            ],
            [
                'id'    => 53,
                'title' => 'program_setting_access',
            ],
            [
                'id'    => 54,
                'title' => 'application_create',
            ],
            [
                'id'    => 55,
                'title' => 'application_edit',
            ],
            [
                'id'    => 56,
                'title' => 'application_show',
            ],
            [
                'id'    => 57,
                'title' => 'application_delete',
            ],
            [
                'id'    => 58,
                'title' => 'application_access',
            ],
            [
                'id'    => 59,
                'title' => 'agent_create',
            ],
            [
                'id'    => 60,
                'title' => 'agent_edit',
            ],
            [
                'id'    => 61,
                'title' => 'agent_show',
            ],
            [
                'id'    => 62,
                'title' => 'agent_delete',
            ],
            [
                'id'    => 63,
                'title' => 'agent_access',
            ],
            [
                'id'    => 64,
                'title' => 'document_create',
            ],
            [
                'id'    => 65,
                'title' => 'document_edit',
            ],
            [
                'id'    => 66,
                'title' => 'document_show',
            ],
            [
                'id'    => 67,
                'title' => 'document_delete',
            ],
            [
                'id'    => 68,
                'title' => 'document_access',
            ],
            [
                'id'    => 69,
                'title' => 'document_type_create',
            ],
            [
                'id'    => 70,
                'title' => 'document_type_edit',
            ],
            [
                'id'    => 71,
                'title' => 'document_type_show',
            ],
            [
                'id'    => 72,
                'title' => 'document_type_delete',
            ],
            [
                'id'    => 73,
                'title' => 'document_type_access',
            ],
            [
                'id'    => 74,
                'title' => 'payment_create',
            ],
            [
                'id'    => 75,
                'title' => 'payment_edit',
            ],
            [
                'id'    => 76,
                'title' => 'payment_show',
            ],
            [
                'id'    => 77,
                'title' => 'payment_delete',
            ],
            [
                'id'    => 78,
                'title' => 'payment_access',
            ],
            [
                'id'    => 79,
                'title' => 'agent_commission_create',
            ],
            [
                'id'    => 80,
                'title' => 'agent_commission_edit',
            ],
            [
                'id'    => 81,
                'title' => 'agent_commission_show',
            ],
            [
                'id'    => 82,
                'title' => 'agent_commission_delete',
            ],
            [
                'id'    => 83,
                'title' => 'agent_commission_access',
            ],
            [
                'id'    => 84,
                'title' => 'visa_application_create',
            ],
            [
                'id'    => 85,
                'title' => 'visa_application_edit',
            ],
            [
                'id'    => 86,
                'title' => 'visa_application_show',
            ],
            [
                'id'    => 87,
                'title' => 'visa_application_delete',
            ],
            [
                'id'    => 88,
                'title' => 'visa_application_access',
            ],
            [
                'id'    => 89,
                'title' => 'offer_letter_create',
            ],
            [
                'id'    => 90,
                'title' => 'offer_letter_edit',
            ],
            [
                'id'    => 91,
                'title' => 'offer_letter_show',
            ],
            [
                'id'    => 92,
                'title' => 'offer_letter_delete',
            ],
            [
                'id'    => 93,
                'title' => 'offer_letter_access',
            ],
            [
                'id'    => 94,
                'title' => 'status_log_create',
            ],
            [
                'id'    => 95,
                'title' => 'status_log_edit',
            ],
            [
                'id'    => 96,
                'title' => 'status_log_show',
            ],
            [
                'id'    => 97,
                'title' => 'status_log_delete',
            ],
            [
                'id'    => 98,
                'title' => 'status_log_access',
            ],
            [
                'id'    => 99,
                'title' => 'course_create',
            ],
            [
                'id'    => 100,
                'title' => 'course_edit',
            ],
            [
                'id'    => 101,
                'title' => 'course_show',
            ],
            [
                'id'    => 102,
                'title' => 'course_delete',
            ],
            [
                'id'    => 103,
                'title' => 'course_access',
            ],
            [
                'id'    => 104,
                'title' => 'commission_from_university_create',
            ],
            [
                'id'    => 105,
                'title' => 'commission_from_university_edit',
            ],
            [
                'id'    => 106,
                'title' => 'commission_from_university_show',
            ],
            [
                'id'    => 107,
                'title' => 'commission_from_university_delete',
            ],
            [
                'id'    => 108,
                'title' => 'commission_from_university_access',
            ],
            [
                'id'    => 109,
                'title' => 'subject_create',
            ],
            [
                'id'    => 110,
                'title' => 'subject_edit',
            ],
            [
                'id'    => 111,
                'title' => 'subject_show',
            ],
            [
                'id'    => 112,
                'title' => 'subject_delete',
            ],
            [
                'id'    => 113,
                'title' => 'subject_access',
            ],
            [
                'id'    => 114,
                'title' => 'commission_setting_create',
            ],
            [
                'id'    => 115,
                'title' => 'commission_setting_edit',
            ],
            [
                'id'    => 116,
                'title' => 'commission_setting_show',
            ],
            [
                'id'    => 117,
                'title' => 'commission_setting_delete',
            ],
            [
                'id'    => 118,
                'title' => 'commission_setting_access',
            ],
            [
                'id'    => 119,
                'title' => 'commission_distribution_create',
            ],
            [
                'id'    => 120,
                'title' => 'commission_distribution_edit',
            ],
            [
                'id'    => 121,
                'title' => 'commission_distribution_show',
            ],
            [
                'id'    => 122,
                'title' => 'commission_distribution_delete',
            ],
            [
                'id'    => 123,
                'title' => 'commission_distribution_access',
            ],
            [
                'id'    => 124,
                'title' => 'nationality_create',
            ],
            [
                'id'    => 125,
                'title' => 'nationality_edit',
            ],
            [
                'id'    => 126,
                'title' => 'nationality_show',
            ],
            [
                'id'    => 127,
                'title' => 'nationality_delete',
            ],
            [
                'id'    => 128,
                'title' => 'nationality_access',
            ],
            [
                'id'    => 129,
                'title' => 'state_create',
            ],
            [
                'id'    => 130,
                'title' => 'state_edit',
            ],
            [
                'id'    => 131,
                'title' => 'state_show',
            ],
            [
                'id'    => 132,
                'title' => 'state_delete',
            ],
            [
                'id'    => 133,
                'title' => 'state_access',
            ],
            [
                'id'    => 134,
                'title' => 'city_create',
            ],
            [
                'id'    => 135,
                'title' => 'city_edit',
            ],
            [
                'id'    => 136,
                'title' => 'city_show',
            ],
            [
                'id'    => 137,
                'title' => 'city_delete',
            ],
            [
                'id'    => 138,
                'title' => 'city_access',
            ],

            [
                'id'    => 139,
                'title' => 'admission_stage_create',
            ],
            [
                'id'    => 140,
                'title' => 'admission_stage_edit',
            ],
            [
                'id'    => 141,
                'title' => 'admission_stage_show',
            ],
            [
                'id'    => 142,
                'title' => 'admission_stage_delete',
            ],
            [
                'id'    => 143,
                'title' => 'admission_stage_access',
            ],
            [
                'id'    => 144,
                'title' => 'admission_status_create',
            ],
            [
                'id'    => 145,
                'title' => 'admission_status_edit',
            ],
            [
                'id'    => 146,
                'title' => 'admission_status_show',
            ],
            [
                'id'    => 147,
                'title' => 'admission_status_delete',
            ],
            [
                'id'    => 148,
                'title' => 'admission_status_access',
            ],

            [
                'id'    => 149,
                'title' => 'profile_password_edit',
            ],

        ];

        Permission::insert($permissions);
    }
}
