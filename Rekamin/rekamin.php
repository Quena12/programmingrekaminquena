<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #337ab7;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
        }
        .result p {
            margin: 5px 0;
        }
        .result span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    class Induk
    {
        public $nilaiRandom;
        
        public function __construct($jml)
        {
            $this->nilaiRandom = $jml;
        }
        
        public function total()
        {
            $totalNilai = 0;
            
            foreach ($this->nilaiRandom as $angka) {
                $totalNilai += $angka;
            }
            
            return $totalNilai;
        }
        
        public function rata_rata()
        {
            $jumlahNilai = count($this->nilaiRandom);
            $totalNilai = $this->total();
            
            return $totalNilai / $jumlahNilai;
        }
        
        public function NilaiTerendah()
        {
            $nilaiTerendah = $this->nilaiRandom[0];
            
            foreach ($this->nilaiRandom as $nilai) {
                if ($nilai < $nilaiTerendah) {
                    $nilaiTerendah = $nilai;
                }
            }
            
            return $nilaiTerendah;
        }
        
        public function NilaiTertinggi()
        {
            $nilaiTertinggi = $this->nilaiRandom[0];
            
            foreach ($this->nilaiRandom as $nilai) {
                if ($nilai > $nilaiTertinggi) {
                    $nilaiTertinggi = $nilai;
                }
            }
            
            return $nilaiTertinggi;
        }
    }

    class Anak extends Induk
    {
        public function __construct()
        {
            $nilaiRandom = [];
            
            for ($yu = 0; $yu < 50; $yu++) {
                $nilaiRandom[] = rand(1, 300);
            }
            
            parent::__construct($nilaiRandom);
        }
    }

    $suf = new Anak();
    $nilaiRandomText = implode(", ", $suf->nilaiRandom);
    $total = $suf->total();
    $rataRata = $suf->rata_rata();
    $nilaiTertinggi = $suf->NilaiTertinggi();
    $nilaiTerendah = $suf->NilaiTerendah();
    ?>

    <h1>Nilai Random</h1>
    <p><?php echo $nilaiRandomText; ?></p>

    <div class="result">
        <p><span>Total:</span> <?php echo $total; ?></p>
        <p><span>Rata-rata:</span> <?php echo $rataRata; ?></p>
        <p><span>Nilai tertinggi:</span> <?php echo $nilaiTertinggi; ?></p>
        <p><span>Nilai terendah:</span> <?php echo $nilaiTerendah; ?></p>
    </div>
</body>
</html>
