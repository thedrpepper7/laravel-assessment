<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CustomCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companiesData = [
            ['Tesco', 'tesco@tesco.com', 'Tesco.png', 'https://www.tesco.com/'],
            ['Walmart', 'walmart@walmart.com', 'Walmart.png', 'https://www.walmart.com/'],
            ['Amazon', 'amazon@amazon.com', 'Amazon.png', 'https://www.amazon.co.uk/'],
            ['Apple', 'apple@apple.com', 'Apple.png', 'https://www.apple.com/uk/'],
            ['Volkswagen', 'volkswagen@volkswagen.com', 'VW.png', 'https://www.volkswagen.co.uk/en.html'],
            ['Boeing', 'boeing@boeing.com', 'Boeing.png', 'https://www.boeing.co.uk/'],
            ['Christian Dior', 'christiandior@christiandior.com', 'ChristianDior.png', 'https://www.dior.com/'],
            ['OnePlus', 'oneplus@oneplus.com', 'OnePlus.png', 'https://www.oneplus.com/uk'],
            ['Nike', 'nike@nike.com', 'Nike.png', 'https://www.nike.com/gb/'],
            ['Dr Pepper', 'drpepper@drpepper.com', 'DrPepper.png', 'https://www.drpepper.com/s/'],
            ['Samsung', 'samsung@samsung.com', 'Samsung.png', 'https://www.samsung.com/uk/'],
            ['Pepsi', 'pepsi@pepsi.com', 'Pepsi.png', 'https://www.pepsi.co.uk/'],
            ['Nvidia', 'nvidia@nvidia.com', 'Nvidia.png', 'https://www.nvidia.com/en-gb/'],
            ['Toyota Motor', 'toyota@toyota.com', 'Toyota.png', 'https://www.toyota.co.uk/'],
            ['Black Mesa', 'support@blackmesa.com', 'blackmesa.png', 'https://blackmesa.com/'],
            ['AT&T', 'att@att.com', 'ATT.png', 'https://www.att.com/'],
            ['Microsoft', 'microsoft@microsoft.com', 'Microsoft.png', 'https://www.microsoft.com/en-gb'],
            ['American Express', 'amex@amex.com', 'Amex.png', 'https://www.americanexpress.com/en-gb/'],
            ['Barclays', 'barclays@barclays.com', 'Barclays.png', 'https://www.barclays.co.uk/'],
            ['Sony', 'sony@sony.com', 'Sony.png', 'https://www.sony.co.uk/'],
        ];

        foreach ($companiesData as $data) {
            Company::create([
                'name' => $data[0],
                'email' => $data[1],
                'logo' => $data[2],
                'website' => $data[3],
            ]);
        }
    }
}
