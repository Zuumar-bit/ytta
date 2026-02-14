<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\TeamMember;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ── Services ──
        $services = [
            [
                'title' => 'Desain Ruang Tamu',
                'description' => 'Transformasi ruang tamu Anda menjadi area yang elegan dan nyaman. Kami menggabungkan estetika modern dengan fungsionalitas untuk menciptakan ruang yang sempurna untuk keluarga dan tamu.',
                'icon' => 'fa-couch',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Desain Dapur Modern',
                'description' => 'Dapur impian dengan layout ergonomis, material premium, dan sentuhan desain kontemporer. Kami merancang dapur yang tidak hanya cantik tapi juga praktis untuk kebutuhan memasak sehari-hari.',
                'icon' => 'fa-utensils',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Desain Kamar Tidur',
                'description' => 'Ciptakan oasis pribadi Anda dengan desain kamar tidur yang menenangkan. Pencahayaan ambient, palet warna harmonis, dan furniture custom untuk kenyamanan maksimal.',
                'icon' => 'fa-bed',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Desain Kantor',
                'description' => 'Ruang kerja produktif dengan desain yang menginspirasi. Dari home office hingga kantor korporat, kami merancang lingkungan kerja yang meningkatkan kreativitas dan efisiensi.',
                'icon' => 'fa-briefcase',
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Desain Kamar Mandi',
                'description' => 'Kamar mandi mewah seperti spa. Desain modern dengan material terbaik, pencahayaan atmosferik, dan layout yang memaksimalkan ruang dengan elegan.',
                'icon' => 'fa-bath',
                'is_featured' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Konsultasi Interior',
                'description' => 'Konsultasi profesional untuk kebutuhan desain interior Anda. Tim ahli kami siap membantu merencanakan, memilih material, dan mengeksekusi visi desain Anda.',
                'icon' => 'fa-comments',
                'is_featured' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // ── Projects ──
        $projects = [
            [
                'title' => 'Apartemen Minimalis Kemang',
                'description' => 'Renovasi total apartemen 80m² dengan konsep minimalis Jepang. Menggunakan material kayu oak dan palet warna netral untuk menciptakan kesan luas dan tenang.',
                'category' => 'living_room',
                'client_name' => 'Budi Santoso',
                'location' => 'Jakarta Selatan',
                'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800',
                'is_featured' => true,
            ],
            [
                'title' => 'Dapur Kontemporer BSD',
                'description' => 'Kitchen set custom dengan island bar, menggunakan material granit dan stainless steel. Desain open kitchen yang terintegrasi dengan ruang makan.',
                'category' => 'kitchen',
                'client_name' => 'Linda Wijaya',
                'location' => 'Tangerang Selatan',
                'image' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=800',
                'is_featured' => true,
            ],
            [
                'title' => 'Kamar Tidur Master Suite',
                'description' => 'Master bedroom dengan walk-in closet dan en-suite bathroom. Nuansa glamor dengan sentuhan gold dan velvet untuk kemewahan yang timeless.',
                'category' => 'bedroom',
                'client_name' => 'Rina Purnama',
                'location' => 'Bandung',
                'image' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?w=800',
                'is_featured' => true,
            ],
            [
                'title' => 'Kantor Startup Kreatif',
                'description' => 'Desain kantor open-plan dengan area kolaborasi, meeting pod, dan breakout space. Tema industrial modern dengan aksen tanaman hijau.',
                'category' => 'office',
                'client_name' => 'PT Inovasi Digital',
                'location' => 'Jakarta Pusat',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800',
                'is_featured' => true,
            ],
            [
                'title' => 'Kamar Mandi Luxury Spa',
                'description' => 'Bathroom mewah dengan bathtub freestanding, rain shower, dan heated floor. Material marble Carrara dan pencahayaan LED ambient.',
                'category' => 'bathroom',
                'client_name' => 'Dewi Anggraini',
                'location' => 'Surabaya',
                'image' => 'https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=800',
                'is_featured' => true,
            ],
            [
                'title' => 'Living Room Scandinavian',
                'description' => 'Ruang tamu bergaya Skandinavia dengan furniture mid-century modern. Dominasi warna putih, kayu terang, dan tekstil lembut untuk nuansa hangat.',
                'category' => 'living_room',
                'client_name' => 'Agus Pratama',
                'location' => 'Yogyakarta',
                'image' => 'https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?w=800',
                'is_featured' => true,
            ],
            [
                'title' => 'Penthouse Modern Jakarta',
                'description' => 'Full interior design untuk penthouse 200m². Konsep mewah kontemporer dengan pemandangan kota, menggunakan material premium dan furniture designer.',
                'category' => 'living_room',
                'client_name' => 'Alexander Tan',
                'location' => 'Jakarta Selatan',
                'image' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800',
                'is_featured' => false,
            ],
            [
                'title' => 'Dapur Rustic Industrial',
                'description' => 'Perpaduan elemen rustic dan industrial dalam dapur berukuran 25m². Exposed brick, pipa tembaga, dan kayu reclaimed untuk karakter yang unik.',
                'category' => 'kitchen',
                'client_name' => 'Maya Sari',
                'location' => 'Bali',
                'image' => 'https://images.unsplash.com/photo-1556909172-54557c7e4fb7?w=800',
                'is_featured' => false,
            ],
            [
                'title' => 'Home Office Premium',
                'description' => 'Ruang kerja di rumah yang profesional dan nyaman. Custom desk, ergonomic chair, acoustic panel, dan pencahayaan task lighting yang optimal.',
                'category' => 'office',
                'client_name' => 'Fajar Nugroho',
                'location' => 'Semarang',
                'image' => 'https://images.unsplash.com/photo-1593062096033-9a26b09da705?w=800',
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // ── Testimonials ──
        $testimonials = [
            [
                'client_name' => 'Budi Santoso',
                'client_role' => 'Pengusaha',
                'content' => 'SUKI benar-benar mengubah apartemen saya menjadi tempat yang luar biasa. Desainnya minimalis tapi tetap terasa hangat dan nyaman. Tim mereka sangat profesional dan detail oriented!',
                'rating' => 5,
            ],
            [
                'client_name' => 'Linda Wijaya',
                'client_role' => 'Ibu Rumah Tangga',
                'content' => 'Dapur impian saya akhirnya terwujud berkat SUKI! Mereka memahami kebutuhan saya dan memberikan solusi desain yang praktis namun tetap cantik. Sangat recommended!',
                'rating' => 5,
            ],
            [
                'client_name' => 'Rina Purnama',
                'client_role' => 'Dokter',
                'content' => 'Kamar tidur yang didesain SUKI membuat saya merasa seperti di hotel bintang lima setiap malam. Perhatian mereka terhadap detail dan pemilihan material sangat luar biasa.',
                'rating' => 5,
            ],
            [
                'client_name' => 'CEO PT Inovasi Digital',
                'client_role' => 'CEO',
                'content' => 'Kantor baru kami didesain oleh SUKI dan hasilnya melampaui ekspektasi. Karyawan kami lebih produktif dan semangat bekerja. Desainnya modern dan fungsional.',
                'rating' => 4,
            ],
            [
                'client_name' => 'Dewi Anggraini',
                'client_role' => 'Arsitek',
                'content' => 'Sebagai sesama profesional di bidang desain, saya sangat mengapresiasi kualitas kerja SUKI. Mereka tidak hanya desainer, tapi juga partner yang memahami visi klien.',
                'rating' => 5,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // ── Team Members ──
        $team = [
            [
                'name' => 'Suki Hartono',
                'position' => 'Founder & Lead Designer',
                'bio' => 'Dengan pengalaman lebih dari 15 tahun di industri desain interior, Suki mendirikan studio ini dengan visi menciptakan ruang yang menginspirasi dan fungsional.',
                'instagram' => '#',
                'linkedin' => '#',
                'sort_order' => 1,
            ],
            [
                'name' => 'Andi Prasetyo',
                'position' => 'Senior Interior Designer',
                'bio' => 'Lulusan Desain Interior ITB dengan spesialisasi di desain residensial mewah. Andi dikenal karena kemampuannya mengombinasikan gaya klasik dan kontemporer.',
                'instagram' => '#',
                'linkedin' => '#',
                'sort_order' => 2,
            ],
            [
                'name' => 'Nadia Putri',
                'position' => 'Project Manager',
                'bio' => 'Nadia memastikan setiap proyek berjalan lancar dari konsep hingga selesai. Detail oriented dan selalu on-time delivery adalah prinsip kerjanya.',
                'instagram' => '#',
                'linkedin' => '#',
                'sort_order' => 3,
            ],
            [
                'name' => 'Ryan Hidayat',
                'position' => '3D Visualization Artist',
                'bio' => 'Ahli dalam membuat visualisasi 3D yang fotorealistik. Ryan membantu klien melihat desain mereka menjadi nyata sebelum konstruksi dimulai.',
                'instagram' => '#',
                'linkedin' => '#',
                'sort_order' => 4,
            ],
        ];

        foreach ($team as $member) {
            TeamMember::create($member);
        }
    }
}
