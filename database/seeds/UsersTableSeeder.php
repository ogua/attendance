<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ahmed Ahia',
                'email' => 'admin@admin.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'ADMIN',
                'force_logout' => '0',
                'is_active' => '1',
                'pro_pic' => 'profileimage/Ft0yakeIOlVJNTI0d6CtT0l9uIMDDtjeJBZZ1Xca.jpeg',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'admin@admin.com',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Ahia  Ahmed',
                'email' => 'ogua@yahoo.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'GES11112',
                'force_logout' => '0',
                'is_active' => '1',
                'pro_pic' => 'profile_img/PWtOajo7IlrFa7pA9EVozIfsT0qi3JISw1T4PO4m.jpeg',
                'password' => '$2y$10$2z65xmpdEl8Y72mu/pws8erS33hr3ZHoOTk8KsYXWO5ytVIct4QtW',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'admin@admin.com',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Ahmed Ahia Ogua',
                'email' => 'ahia@yahoo.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'LEC1019330',
                'force_logout' => '0',
                'is_active' => '0',
                'pro_pic' => 'profileimage/Ft0yakeIOlVJNTI0d6CtT0l9uIMDDtjeJBZZ1Xca.jpeg',
                'password' => '$2y$10$bFsPiTwDw1KD1suMZ1yVpux5xKh77Z5/XEEBn30v/u5o1n/XIGnba',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'ahia@yahoo.com',
            ),
            3 => 
            array (
                'id' => 15,
                'name' => 'Toure Domingo',
                'email' => 'lec1037870@osms.edu.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'OSMS1037870',
                'force_logout' => '0',
                'is_active' => '0',
                'pro_pic' => 'profileimage/JhQ9mV1U7n6TCZTk8JGLMwsLmDTPT2rO9EK6CRhr.jpg',
                'password' => '$2y$10$n.HLsm5wzjBCHoU4HgKbpOxfzDS8V/sVwNOEbWGHYhP5NgQcuDbFW',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'domingo@gmail.com',
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Zibit Amartey Junior',
                'email' => 'ges43740@osms.edu.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'GES43740',
                'force_logout' => '0',
                'is_active' => '0',
                'pro_pic' => 'profile_img/HxrrnpLAlECxtNWVxpJ6nzQSuUQTPcHR2Nw91mme.jpeg',
                'password' => '$2y$10$bKu5coHUToNvHIk.cGmfQ.Gx54pepqipJxoJ66o5TcJBXlVhEJmeK',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'junior@yahoo.com',
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Mamoud Billal Kidija',
                'email' => 'GES26801@osms.edu.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'GES26801',
                'force_logout' => '0',
                'is_active' => '0',
                'pro_pic' => 'profileimage/0t4wBgXpzGr0UyXQC8p1Yp2T9zMzyRUoYJQIhnWs.jpg',
                'password' => '$2y$10$jfxJ2eG3FRW6hFTPUTiIW.eD40R0BzMeiGft5JF.hRI/mKVnGqDoe',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'test@gmail.com',
            ),
            6 => 
            array (
                'id' => 22,
                'name' => 'Toure Ogua',
                'email' => 'GES79152@osms.edu.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'GES79152',
                'force_logout' => '0',
                'is_active' => '0',
                'pro_pic' => 'profileimage/APIU2K96ftbfXqlCdQ7tYkt3P8SSSUjvCdOnj9PZ.jpg',
                'password' => '$2y$10$UPYTASs9S2hqhBUBexJuDe99YcfYcRAhDBT3KprxXMokGengVtzLW',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'ogua@ogua.com',
            ),
            7 => 
            array (
                'id' => 23,
                'name' => 'Abigai Agoe Adjie',
                'email' => 'GES54920@osms.edu.com',
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'avatar' => 'avatar.png',
                'email_verified_at' => NULL,
                'indexnumber' => 'GES54920',
                'force_logout' => '0',
                'is_active' => '0',
                'pro_pic' => 'profileimage/I0gmRP8H7tFSgGIMFHxjfJPU7jBurHrNN1fDCDuz.jpg',
                'password' => '$2y$10$aUu7kblrlHgk3y2iHPFrZ.MkDsdnyNGS3u7nF16iavDvPmDih/gUu',
                'remember_token' => NULL,
                'ticketit_admin' => 0,
                'ticketit_agent' => 0,
                'regemail' => 'abi@gmail.com',
            ),
        ));
        
        
    }
}