<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
        [
            "name"=> "Alya Amanda",
            "tanggal_lahir"=> "2006-08-26",
            "golongan_darah"=> "A",
            "horoskop"=> "Virgo",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Alya",
            "role"=> "anggota",
            "foto"=> "alya_amanda.jpg",
        ],
        [
           "name"=> "Amanda Sukma",
            "tanggal_lahir"=> "2004-12-17",
            "golongan_darah"=> "O",
            "horoskop"=> "Sagittarius",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Amanda",
            "role"=> "anggota",
            "foto"=> "amanda_sukma.jpg",
        ],
        [
           "name"=> "Angelina Christy",
            "tanggal_lahir"=> "2005-12-05",
            "golongan_darah"=> "O",
            "horoskop"=> "Sagittarius",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Christy",
            "role"=> "anggota",
            "foto"=> "angelina_christy.jpg",
        ],
        [
           "name"=> "Anindya Ramadhani",
            "tanggal_lahir"=> "2005-10-18",
            "golongan_darah"=> "O",
            "horoskop"=> "Libra",
            "tinggi_badan"=> "154",
            "nama_panggilan"=> "Anindya",
            "role"=> "anggota",
            "foto"=> "anindya_ramadhani.jpg",
        ],
        [
           "name"=> "Aurellia",
            "tanggal_lahir"=> "2002-10-29",
            "golongan_darah"=> "O",
            "horoskop"=> "Scorpio",
            "tinggi_badan"=> "155",
            "nama_panggilan"=> "Lia",
            "role"=> "anggota",
            "foto"=> "aurellia.jpg",
        ],
        [
           "name"=> "Cathleen Nixie",
            "tanggal_lahir"=> "2009-05-28",
            "golongan_darah"=> "A",
            "horoskop"=> "Gemini",
            "tinggi_badan"=> "158",
            "nama_panggilan"=> "Cathy",
            "role"=> "anggota",
            "foto"=> "cathleen_nixie.jpg",
        ],
        [
           "name"=> "Celline Thefani",
            "tanggal_lahir"=> "2007-04-09",
            "golongan_darah"=> "O",
            "horoskop"=> "Aries",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Elin",
            "role"=> "anggota",
            "foto"=> "celline_thefani.jpg",
        ],
        [
           "name"=> "Chelsea Davina",
            "tanggal_lahir"=> "2009-12-23",
            "golongan_darah"=> "B",
            "horoskop"=> "Capricorn",
            "tinggi_badan"=> "168",
            "nama_panggilan"=> "Chelsea",
            "role"=> "anggota",
            "foto"=> "chelsea_davina.jpg",
        ],
        [
           "name"=> "Cornelia Vanisa",
            "tanggal_lahir"=> "2002-07-26",
            "golongan_darah"=> "O",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "162",
            "nama_panggilan"=> "Oniel",
            "role"=> "anggota",
            "foto"=> "cornelia_vanisa.jpg",
        ],
        [
            "name"=> "Cynthia Yaputera",
            "tanggal_lahir"=> "2003-11-22",
            "golongan_darah"=> "O",
            "horoskop"=> "Sagittarius",
            "tinggi_badan"=> "158",
            "nama_panggilan"=> "Cynthia",
            "role"=> "anggota",
            "foto"=> "cynthia_yaputera.jpg",
        ],
        [
            "name"=> "Dena Natalia",
            "tanggal_lahir"=> "2005-12-16",
            "golongan_darah"=> "O",
            "horoskop"=> "Sagittarius",
            "tinggi_badan"=> "162",
            "nama_panggilan"=> "Danella",
            "role"=> "anggota",
            "foto"=> "dena_natalia.jpg",
        ],
        [
            "name"=> "Desy Natalia",
            "tanggal_lahir"=> "2005-12-16",
            "golongan_darah"=> "O",
            "horoskop"=> "Sagittarius",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Daisy",
            "role"=> "anggota",
            "foto"=> "desy_natalia.jpg",
        ],
        [
            "name"=> "Febriola Sinambela",
            "tanggal_lahir"=> "2005-02-26",
            "golongan_darah"=> "B",
            "horoskop"=> "Pisces",
            "tinggi_badan"=> "154",
            "nama_panggilan"=> "Olla",
            "role"=> "anggota",
            "foto"=> "febriola_sinambela.jpg",
        ],
        [
            "name"=> "Feni Fitriyanti",
            "tanggal_lahir"=> "1999-01-16",
            "golongan_darah"=> "O",
            "horoskop"=> "Capricorn",
            "tinggi_badan"=> "162",
            "nama_panggilan"=> "Feni",
            "role"=> "anggota",
            "foto"=> "feni_fitriyanti.jpg",
        ],
        [
            "name"=> "Fiony Alveria",
            "tanggal_lahir"=> "2002-02-04",
            "golongan_darah"=> "O",
            "horoskop"=> "Aquarius",
            "tinggi_badan"=> "158",
            "nama_panggilan"=> "Fiony",
            "role"=> "anggota",
            "foto"=> "fiony_alveria.jpg",
        ],
        [
            "name"=> "Freya Jayawardana",
            "tanggal_lahir"=> "2006-02-13",
            "golongan_darah"=> "B",
            "horoskop"=> "Aquarius",
            "tinggi_badan"=> "154",
            "nama_panggilan"=> "Freya",
            "role"=> "anggota",
            "foto"=> "freya_jayawardana.jpg",
        ],
        [
            "name"=> "Gabriela Abigail",
            "tanggal_lahir"=> "2006-08-07",
            "golongan_darah"=> "B",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Ella",
            "role"=> "anggota",
            "foto"=> "gabriela_abigail.jpg",
        ],
        [
            "name"=> "Gendis Mayrannisa",
            "tanggal_lahir"=> "2010-06-23",
            "golongan_darah"=> "B",
            "horoskop"=> "Cancer",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Gendis",
            "role"=> "anggota",
            "foto"=> "gendis_mayrannisa.jpg",
        ],
        [
            "name"=> "Gita Sekar Andarini",
            "tanggal_lahir"=> "2001-06-30",
            "golongan_darah"=> "O",
            "horoskop"=> "Cancer",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Gita",
            "role"=> "anggota",
            "foto"=> "gita_sekar_andarini.jpg",
        ],
        [
            "name"=> "Greesella Adhalia",
            "tanggal_lahir"=> "2006-01-10",
            "golongan_darah"=> "O",
            "horoskop"=> "Capricorn",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Gressel",
            "role"=> "anggota",
            "foto"=> "greesella_adhalia.jpg",
        ],
        [
            "name"=> "Grace Octaviani",
            "tanggal_lahir"=> "2007-10-18",
            "golongan_darah"=> "B",
            "horoskop"=> "Libra",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Gracie",
            "role"=> "anggota",
            "foto"=> "grace_octaviani.jpg",
        ],
        [
            "name"=> "Helisma Putri",
            "tanggal_lahir"=> "2000-06-15",
            "golongan_darah"=> "A",
            "horoskop"=> "Gemini",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Eli",
            "role"=> "anggota",
            "foto"=> "helisma_putri.jpg",
        ],
        [
            "name"=> "Indah Cahya",
            "tanggal_lahir"=> "2001-03-20",
            "golongan_darah"=> "A",
            "horoskop"=> "Pisces",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Indah",
            "role"=> "anggota",
            "foto"=> "indah_cahya.jpg",
        ],
        [
            "name"=> "Indira Seruni",
            "tanggal_lahir"=> "2004-04-26",
            "golongan_darah"=> "A",
            "horoskop"=> "Taurus",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Indira",
            "role"=> "anggota",
            "foto"=> "indira_seruni.jpg",
        ],
        [
            "name"=> "Jessica Chandra",
            "tanggal_lahir"=> "2005-09-23",
            "golongan_darah"=> "O",
            "horoskop"=> "Libra",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Jessi",
            "role"=> "anggota",
            "foto"=> "jessica_chandra.jpg",
        ],
        [
            "name"=> "Jesslyn Elly",
            "tanggal_lahir"=> "2001-09-13",
            "golongan_darah"=> "O",
            "horoskop"=> "Virgo",
            "tinggi_badan"=> "155",
            "nama_panggilan"=> "Lyn",
            "role"=> "anggota",
            "foto"=> "jesslyn_elly.jpg",
        ],
        [
            "name"=> "Kathrina Irene",
            "tanggal_lahir"=> "2006-07-26",
            "golongan_darah"=> "A",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Kathrina",
            "role"=> "anggota",
            "foto"=> "kathrina_irene.jpg",
        ],
        [
            "name"=> "Lulu Salsabila",
            "tanggal_lahir"=> "2002-10-23",
            "golongan_darah"=> "B",
            "horoskop"=> "Scorpio",
            "tinggi_badan"=> "157",
            "nama_panggilan"=> "Lulu",
            "role"=> "anggota",
            "foto"=> "lulu_salsabila.jpg",
        ],
        [
            "name"=> "Marsha Lenathea",
            "tanggal_lahir"=> "2006-01-09",
            "golongan_darah"=> "O",
            "horoskop"=> "Capricorn",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Marsha",
            "role"=> "anggota",
            "foto"=> "marsha_lenathea.jpg",
        ],
        [
            "name"=> "Michelle Alexandra",
            "tanggal_lahir"=> "2009-04-22",
            "golongan_darah"=> "O",
            "horoskop"=> "Taurus",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Michie",
            "role"=> "anggota",
            "foto"=> "michelle_alexandra.jpg",
        ],
        [
            "name"=> "Mutiara Azzahra",
            "tanggal_lahir"=> "2004-07-12",
            "golongan_darah"=> "B",
            "horoskop"=> "Cancer",
            "tinggi_badan"=> "158",
            "nama_panggilan"=> "Muthe",
            "role"=> "anggota",
            "foto"=> "mutiara_azzahra.jpg",
        ],
        [
            "name"=> "Raisha Syifa",
            "tanggal_lahir"=> "2007-11-11",
            "golongan_darah"=> "AB",
            "horoskop"=> "Scorpio",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Raisha",
            "role"=> "anggota",
            "foto"=> "raisha_syifa.jpg",
        ],
        [
            "name"=> "Shania Gracia",
            "tanggal_lahir"=> "1999-08-31",
            "golongan_darah"=> "A",
            "horoskop"=> "Virgo",
            "tinggi_badan"=> "161",
            "nama_panggilan"=> "Gracia",
            "role"=> "anggota",
            "foto"=> "shania_gracia.jpg",
        ],
        [
            "name"=> "Abigail Rachel",
            "tanggal_lahir"=> "2008-08-06",
            "golongan_darah"=> "B",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "161",
            "nama_panggilan"=> "Aralie",
            "role"=> "trainee",
            "foto"=> "abigail_rachel.jpg",
        ],
        [
            "name"=> "Adeline Wijaya",
            "tanggal_lahir"=> "2007-09-01",
            "golongan_darah"=> "B",
            "horoskop"=> "Virgo",
            "tinggi_badan"=> "167",
            "nama_panggilan"=> "Delynn",
            "role"=> "trainee",
            "foto"=> "adeline_wijaya.jpg",
        ],
        [
            "name"=> "Astrella Virgiananda",
            "tanggal_lahir"=> "2010-08-06",
            "golongan_darah"=> "AB",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "162",
            "nama_panggilan"=> "Virgi",
            "role"=> "trainee",
            "foto"=> "Astrella_Virgiananda.jpg",
        ],
        [
            "name"=> "Aulia Riza",
            "tanggal_lahir"=> "2007-07-14",
            "golongan_darah"=> "O",
            "horoskop"=> "Cancer",
            "tinggi_badan"=> "166",
            "nama_panggilan"=> "Auwia",
            "role"=> "trainee",
            "foto"=> "Aulia_Riza.jpg",
        ],
        [
            "name"=> "Aurhel Alana",
            "tanggal_lahir"=> "2006-09-14",
            "golongan_darah"=> "-",
            "horoskop"=> "Virgo",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Lana",
            "role"=> "trainee",
            "foto"=> "aurhel_alana.jpg",
        ],
        [
            "name"=> "Bong Aprilli",
            "tanggal_lahir"=> "2010-04-01",
            "golongan_darah"=> "A",
            "horoskop"=> "Aries",
            "tinggi_badan"=> "164",
            "nama_panggilan"=> "Rilly",
            "role"=> "trainee",
            "foto"=> "Bong_Aprilli.jpg",
        ],
        [
            "name"=> "Catherina Vallencia",
            "tanggal_lahir"=> "2007-08-21",
            "golongan_darah"=> "B",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Erine",
            "role"=> "trainee",
            "foto"=> "catherina_vallencia.jpg",
        ],
        [
            "name"=> "Fritzy Rosmerian",
            "tanggal_lahir"=> "2008-07-28",
            "golongan_darah"=> "A",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "157",
            "nama_panggilan"=> "Fritzy",
            "role"=> "trainee",
            "foto"=> "fritzy_rosmerian.jpg",
        ],
        [
            "name"=> "Hagia Sopia",
            "tanggal_lahir"=> "2008-07-01",
            "golongan_darah"=> "O",
            "horoskop"=> "Cancer",
            "tinggi_badan"=> "166",
            "nama_panggilan"=> "Giaa",
            "role"=> "trainee",
            "foto"=> "Hagia_Sopia.jpg",
        ],
        [
            "name"=> "Hillary Abigail",
            "tanggal_lahir"=> "2007-10-19",
            "golongan_darah"=> "O",
            "horoskop"=> "Libra",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Lily",
            "role"=> "trainee",
            "foto"=> "hillary_abigail.jpg",
        ],
        [
            "name"=> "Humaira Ramadhani",
            "tanggal_lahir"=> "2011-08-13",
            "golongan_darah"=> "A",
            "horoskop"=> "Leo",
            "tinggi_badan"=> "156",
            "nama_panggilan"=> "Maira",
            "role"=> "trainee",
            "foto"=> "Humaira_Ramadhani.jpg",
        ],
        [
            "name"=> "Jacqueline Immanuela",
            "tanggal_lahir"=> "2009-07-09",
            "golongan_darah"=> "B",
            "horoskop"=> "Cancer",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Ekin",
            "role"=> "trainee",
            "foto"=> "Jacqueline_Immanuela.jpg",
        ],
        [
            "name"=> "Jazzlyn Trisha",
            "tanggal_lahir"=> "2011-02-16",
            "golongan_darah"=> "O",
            "horoskop"=> "Aquarius",
            "tinggi_badan"=> "164",
            "nama_panggilan"=> "Trisha",
            "role"=> "trainee",
            "foto"=> "jazzlyn_trisha.jpg",
        ],
        [
            "name"=> "Jemima Evodie",
            "tanggal_lahir"=> "2009-11-09",
            "golongan_darah"=> "O",
            "horoskop"=> "Scorpio",
            "tinggi_badan"=> "165",
            "nama_panggilan"=> "Jemima",
            "role"=> "trainee",
            "foto"=> "Jemima_Evodie.jpg",
        ],
        [
            "name"=> "Letycia Moreen",
            "tanggal_lahir"=> "2010-06-07",
            "golongan_darah"=> "O",
            "horoskop"=> "Gemini",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Moreen",
            "role"=> "trainee",
            "foto"=> "letycia_moreen.jpg",
        ],
        [
            "name"=> "Michelle Levia",
            "tanggal_lahir"=> "2009-01-24",
            "golongan_darah"=> "O",
            "horoskop"=> "Aquarius",
            "tinggi_badan"=> "168",
            "nama_panggilan"=> "Levi",
            "role"=> "trainee",
            "foto"=> "michelle_levia.jpg",
        ],
        [
            "name"=> "Mikaela Kusjanto",
            "tanggal_lahir"=> "2007-12-15",
            "golongan_darah"=> "O",
            "horoskop"=> "Sagittarius",
            "tinggi_badan"=> "166",
            "nama_panggilan"=> "Mikaela",
            "role"=> "trainee",
            "foto"=> "Mikaela_Kusjanto.jpg",
        ],
        [
            "name"=> "Nayla Suji",
            "tanggal_lahir"=> "2007-06-18",
            "golongan_darah"=> "AB",
            "horoskop"=> "Gemini",
            "tinggi_badan"=> "161",
            "nama_panggilan"=> "Nayla",
            "role"=> "trainee",
            "foto"=> "nayla_suji.jpg",
        ],
        [
            "name"=> "Nina Tutachia",
            "tanggal_lahir"=> "2009-10-16",
            "golongan_darah"=> "O",
            "horoskop"=> "Libra",
            "tinggi_badan"=> "162",
            "nama_panggilan"=> "Nachia",
            "role"=> "trainee",
            "foto"=> "nina_tutachia.jpg",
        ],
        [
            "name"=> "Nur Intan",
            "tanggal_lahir"=> "2006-02-24",
            "golongan_darah"=> "B",
            "horoskop"=> "Pisces",
            "tinggi_badan"=> "157",
            "nama_panggilan"=> "Intan",
            "role"=> "trainee",
            "foto"=> "Nur_Intan.jpg",
        ],
        [
            "name"=> "Oline Manuel",
            "tanggal_lahir"=> "2007-11-03",
            "golongan_darah"=> "B",
            "horoskop"=> "Scorpio",
            "tinggi_badan"=> "167",
            "nama_panggilan"=> "Oline",
            "role"=> "trainee",
            "foto"=> "oline_manuel.jpg",
        ],
        [
            "name"=> "Regina Wilian",
            "tanggal_lahir"=> "2009-12-10",
            "golongan_darah"=> "B",
            "horoskop"=> "Sagittarius",
            "tinggi_badan"=> "169",
            "nama_panggilan"=> "Regie",
            "role"=> "trainee",
            "foto"=> "regina_wilian.jpg",
        ],
        [
            "name"=> "Ribka Budiman",
            "tanggal_lahir"=> "2009-01-13",
            "golongan_darah"=> "O",
            "horoskop"=> "Capricorn",
            "tinggi_badan"=> "163",
            "nama_panggilan"=> "Ribka",
            "role"=> "trainee",
            "foto"=> "ribka_budiman.jpg",
        ],
        [
            "name"=> "Shabilqis Naila",
            "tanggal_lahir"=> "2008-09-01",
            "golongan_darah"=> "B",
            "horoskop"=> "Virgo",
            "tinggi_badan"=> "160",
            "nama_panggilan"=> "Nala",
            "role"=> "trainee",
            "foto"=> "shabilqis_naila.jpg",
        ],
        [
            "name"=> "Victoria Kimberly",
            "tanggal_lahir"=> "2010-03-08",
            "golongan_darah"=> "AB",
            "horoskop"=> "Pisces",
            "tinggi_badan"=> "158",
            "nama_panggilan"=> "Kimmy",
            "role"=> "trainee",
            "foto"=> "victoria_kimberly.jpg",
        ],
            
        ];
        DB::table('members')->insert($members);
    }
}
