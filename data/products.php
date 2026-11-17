<?php
declare(strict_types=1);

function getAllProducts(): array
{
    return [
        [
            'id' => 1,
            'name' => 'Keychron K2 Mechanical Keyboard',
            'category' => 'peripherals',
            'price' => 89.99,
            'stock' => 24,
            'rating' => 4.8,
            'sku' => 'PER-KB-001',
            'short_desc' => '75% layout wireless mechanical keyboard with Gateron Brown tactile switches.',
            'description' => 'Compact 84-key wireless and wired mechanical keyboard featuring aluminum frame, white LED backlight, Mac/Windows compatibility, and hot-swappable Gateron Brown switches.'
        ],
        [
            'id' => 2,
            'name' => 'Logitech MX Master 3S Wireless Mouse',
            'category' => 'peripherals',
            'price' => 99.00,
            'stock' => 18,
            'rating' => 4.9,
            'sku' => 'PER-MS-002',
            'short_desc' => 'Ergonomic productivity mouse with 8K DPI sensor and MagSpeed electromagnetic scrolling.',
            'description' => 'Designed for developers and analysts. Features quiet clicks, customizable side buttons, USB-C quick charging, and multi-device Bluetooth connectivity.'
        ],
        [
            'id' => 3,
            'name' => 'Dell UltraSharp U2723QE 27" 4K Monitor',
            'category' => 'electronics',
            'price' => 579.99,
            'stock' => 9,
            'rating' => 4.9,
            'sku' => 'ELC-MN-003',
            'short_desc' => '27-inch 4K UHD IPS Black monitor with USB-C 90W Power Delivery hub.',
            'description' => 'High-contrast IPS Black panel covering 98% DCI-P3 color gamut. Built-in RJ45 Ethernet, DisplayPort, HDMI, and 90W USB-C upstream port.'
        ],
        [
            'id' => 4,
            'name' => 'Sony WH-1000XM5 Noise Canceling Headphones',
            'category' => 'audio',
            'price' => 348.00,
            'stock' => 15,
            'rating' => 4.8,
            'sku' => 'AUD-HP-004',
            'short_desc' => 'Industry-leading active noise cancellation with 30-hour battery life.',
            'description' => 'Powered by two processors controlling eight microphones for unprecedented noise cancellation, crystal-clear hands-free calling, and multipoint Bluetooth connection.'
        ],
        [
            'id' => 5,
            'name' => 'Anker 737 Power Bank (PowerCore 24K)',
            'category' => 'accessories',
            'price' => 109.99,
            'stock' => 31,
            'rating' => 4.7,
            'sku' => 'ACC-PB-005',
            'short_desc' => '24,000mAh 140W two-way fast charging portable laptop charger with smart display.',
            'description' => 'Equipped with Power Delivery 3.1 to charge laptops, tablets, and phones at up to 140W. Features a real-time digital OLED telemetry screen.'
        ],
        [
            'id' => 6,
            'name' => 'Apple MacBook Air 13" M3 (16GB / 512GB)',
            'category' => 'electronics',
            'price' => 1299.00,
            'stock' => 6,
            'rating' => 4.9,
            'sku' => 'ELC-LP-006',
            'short_desc' => 'Ultra-thin fanless laptop with Apple M3 8-core CPU and Liquid Retina display.',
            'description' => 'Built for portability and all-day battery life up to 18 hours. Includes MagSafe 3 charging, two Thunderbolt ports, and 1080p FaceTime HD camera.'
        ],
        [
            'id' => 7,
            'name' => 'Ducky One 3 Mini RGB Gaming Keyboard',
            'category' => 'peripherals',
            'price' => 119.00,
            'stock' => 14,
            'rating' => 4.6,
            'sku' => 'PER-KB-007',
            'short_desc' => '60% compact mechanical keyboard with Cherry MX Red switches and PBT keycaps.',
            'description' => 'Features QUACK Mechanics acoustic dampening, hot-swappable Kailh sockets, double-shot PBT keycaps, and detachable braided USB-C cable.'
        ],
        [
            'id' => 8,
            'name' => 'Samsung T7 Shield 2TB Portable SSD',
            'category' => 'electronics',
            'price' => 169.99,
            'stock' => 27,
            'rating' => 4.8,
            'sku' => 'ELC-ST-008',
            'short_desc' => 'Rugged IP65 water and dust resistant external NVMe SSD with 1050 MB/s read speed.',
            'description' => 'USB 3.2 Gen 2 external solid-state drive engineered with rubberized exterior for 3-meter drop protection and sustained high-speed file transfers.'
        ],
        [
            'id' => 9,
            'name' => 'Audio-Technica AT2020USB-X Microphone',
            'category' => 'audio',
            'price' => 149.00,
            'stock' => 19,
            'rating' => 4.7,
            'sku' => 'AUD-MC-009',
            'short_desc' => 'Cardioid condenser USB-C studio microphone with zero-latency headphone monitoring.',
            'description' => 'Delivers high-resolution 24-bit/96 kHz sampling rate, capacitive mute touch sensor, mix control dial, and custom desk stand.'
        ],
        [
            'id' => 10,
            'name' => 'CalDigit TS4 Thunderbolt 4 Docking Station',
            'category' => 'accessories',
            'price' => 379.99,
            'stock' => 7,
            'rating' => 4.8,
            'sku' => 'ACC-DK-010',
            'short_desc' => '18-port Thunderbolt 4 dock with 98W host charging and 2.5GbE Ethernet.',
            'description' => 'Expands a single Thunderbolt 4 port into 18 connectivity ports including DisplayPort 1.4, SD/microSD UHS-II readers, 8 USB ports, and 2.5 Gigabit Ethernet.'
        ],
        [
            'id' => 11,
            'name' => 'LG 34WN80C-B 34" UltraWide QHD Monitor',
            'category' => 'electronics',
            'price' => 449.00,
            'stock' => 11,
            'rating' => 4.6,
            'sku' => 'ELC-MN-011',
            'short_desc' => '34-inch 21:9 curved WQHD (3440x1440) IPS display with sRGB 99% accuracy.',
            'description' => 'Curved panoramic workspace ideal for multitasking, code editors, and timeline analysis. Includes USB Type-C with 60W power delivery.'
        ],
        [
            'id' => 12,
            'name' => 'Razer DeathAdder V3 Pro Wireless Mouse',
            'category' => 'peripherals',
            'price' => 139.99,
            'stock' => 22,
            'rating' => 4.7,
            'sku' => 'PER-MS-012',
            'short_desc' => '63g ultra-lightweight ergonomic wireless mouse with Focus Pro 30K optical sensor.',
            'description' => 'Engineered for esports precision with Optical Mouse Switches Gen-3, 90-hour battery life, and HyperSpeed low-latency wireless dongle.'
        ],
        [
            'id' => 13,
            'name' => 'Bose QuietComfort Ultra Earbuds',
            'category' => 'audio',
            'price' => 279.00,
            'stock' => 16,
            'rating' => 4.5,
            'sku' => 'AUD-EB-013',
            'short_desc' => 'True wireless spatial audio earbuds with CustomTune sound calibration.',
            'description' => 'Adapts noise cancellation and sound profile to the unique shape of your ears. IPX4 sweat resistant with up to 6 hours per charge.'
        ],
        [
            'id' => 14,
            'name' => 'Logitech Brio 4K Ultra HD Webcam',
            'category' => 'peripherals',
            'price' => 159.00,
            'stock' => 20,
            'rating' => 4.5,
            'sku' => 'PER-WC-014',
            'short_desc' => '4K HDR business and streaming webcam with RightLight 3 and dual omni-directional mics.',
            'description' => 'Supports 4K at 30fps or 1080p at 60fps, adjustable field of view (65°, 78°, 90°), Windows Hello infrared facial recognition, and privacy shutter.'
        ],
        [
            'id' => 15,
            'name' => 'UGREEN Nexode 100W GaN Wall Charger',
            'category' => 'accessories',
            'price' => 54.99,
            'stock' => 45,
            'rating' => 4.8,
            'sku' => 'ACC-CH-015',
            'short_desc' => '4-port GaN II fast charger (3x USB-C, 1x USB-A) for laptops and mobile devices.',
            'description' => 'Compact gallium nitride power adapter capable of charging a 16-inch laptop and two phones simultaneously with thermal guard protection.'
        ],
        [
            'id' => 16,
            'name' => 'ASUS ROG Strix Scope II 96 Wireless Keyboard',
            'category' => 'peripherals',
            'price' => 169.99,
            'stock' => 12,
            'rating' => 4.7,
            'sku' => 'PER-KB-016',
            'short_desc' => '96% layout tri-mode wireless mechanical keyboard with pre-lubed NX Snow switches.',
            'description' => 'Retains all function and number pad keys in a compact footprint. Includes silicone dampening foam, PBT keycaps, and multi-function control wheel.'
        ],
        [
            'id' => 17,
            'name' => 'Synology DiskStation DS224+ 2-Bay NAS',
            'category' => 'electronics',
            'price' => 299.99,
            'stock' => 8,
            'rating' => 4.8,
            'sku' => 'ELC-NS-017',
            'short_desc' => 'Compact 2-bay network attached storage powered by Intel Celeron J4125 quad-core CPU.',
            'description' => 'Centralize backups, Docker containers, and private cloud storage with Synology DiskStation Manager (DSM) and dual 1GbE LAN ports.'
        ],
        [
            'id' => 18,
            'name' => 'Edifier R1280DBs Active Bookshelf Speakers',
            'category' => 'audio',
            'price' => 159.99,
            'stock' => 17,
            'rating' => 4.7,
            'sku' => 'AUD-SP-018',
            'short_desc' => '42W RMS studio-style bookshelf speakers with Bluetooth 5.0, Optical, and Sub-Out.',
            'description' => 'Classic wood enclosure reducing acoustic resonance, 4-inch bass driver, 13mm silk dome tweeter, and side-mounted bass/treble dials.'
        ],
        [
            'id' => 19,
            'name' => 'Nuphy Air75 V2 Low-Profile Keyboard',
            'category' => 'peripherals',
            'price' => 119.95,
            'stock' => 13,
            'rating' => 4.8,
            'sku' => 'PER-KB-019',
            'short_desc' => 'Ultra-slim QMK/VIA wireless mechanical keyboard with 1000Hz polling rate.',
            'description' => 'Supports full key remapping via QMK/VIA firmware, multi-OS switches, aluminum top frame, and 4000mAh battery.'
        ],
        [
            'id' => 20,
            'name' => 'Cable Matters 40Gbps USB4 Braided Cable (1m)',
            'category' => 'accessories',
            'price' => 24.99,
            'stock' => 60,
            'rating' => 4.7,
            'sku' => 'ACC-CB-020',
            'short_desc' => 'Certified USB4 cable supporting 40Gbps data, 8K video, and 240W EPR charging.',
            'description' => 'Backward compatible with Thunderbolt 4, Thunderbolt 3, and USB-C 3.2 devices. Braided jacket tested for 10,000+ bend cycles.'
        ],
        [
            'id' => 21,
            'name' => 'Raspberry Pi 5 8GB Single Board Computer',
            'category' => 'electronics',
            'price' => 85.00,
            'stock' => 25,
            'rating' => 4.9,
            'sku' => 'ELC-SB-021',
            'short_desc' => '2.4GHz quad-core 64-bit Arm Cortex-A76 SBC with PCIe 2.0 interface and dual 4K HDMI.',
            'description' => 'Delivers 2-3x the CPU performance of Raspberry Pi 4, featuring VideoCore VII GPU, Gigabit Ethernet with PoE+ support, and real-time clock.'
        ],
        [
            'id' => 22,
            'name' => 'Sennheiser HD 560S Open-Back Headphones',
            'category' => 'audio',
            'price' => 179.95,
            'stock' => 10,
            'rating' => 4.8,
            'sku' => 'AUD-HP-022',
            'short_desc' => 'Reference-grade open-back studio headphones with neutral frequency response.',
            'description' => 'Angled transducers recreate optimal triangular listening position for analytical audio monitoring and long mixing sessions.'
        ],
        [
            'id' => 23,
            'name' => 'Rain Design mStand Aluminum Laptop Stand',
            'category' => 'accessories',
            'price' => 49.90,
            'stock' => 29,
            'rating' => 4.8,
            'sku' => 'ACC-ST-023',
            'short_desc' => 'Single-piece anodized aluminum ergonomic laptop riser with cable organizer.',
            'description' => 'Raises laptop screen by 5.9 inches to eye level, improves airflow cooling, and matches anodized aluminum notebook finishes.'
        ],
        [
            'id' => 24,
            'name' => 'TP-Link Archer AX73 AX5400 Wi-Fi 6 Router',
            'category' => 'electronics',
            'price' => 149.99,
            'stock' => 14,
            'rating' => 4.6,
            'sku' => 'ELC-RT-024',
            'short_desc' => 'Dual-band Gigabit Wi-Fi 6 router with 6 high-gain antennas and 1.5GHz triple-core CPU.',
            'description' => 'Supports 4T4R and HE160 on the 5 GHz band for 4.8 Gbps ultra-fast connections, MU-MIMO, OFDMA, and USB 3.0 media sharing.'
        ],
    ];
}

function getCategories(): array
{
    return [
        'electronics' => 'Electronics & Computing',
        'peripherals' => 'Keyboards & Peripherals',
        'audio' => 'Audio & Microphones',
        'accessories' => 'Docks, Power & Accessories',
    ];
}

function getProductById(int $id): ?array
{
    foreach (getAllProducts() as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }
    return null;
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}