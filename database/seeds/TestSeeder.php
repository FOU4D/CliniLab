<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

App\Models\Test::create([
	'code' => 'BA1',
	'name' => 'Cortisol, serum',
	'description' => 'To add to Group: BA	BIOCHEMISTRY, ADRENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',

]);

App\Models\Test::create([
	'code' => 'BA2',
	'name' => 'Cortisol, (stimulation or suppression tests)',
	'description' => 'To add to Group: BA	BIOCHEMISTRY, ADRENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BA3',
	'name' => 'Catecholamines, 24 hr urine',
	'description' => 'To add to Group: BA	BIOCHEMISTRY, ADRENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BA4',
	'name' => 'Vanilylmandelic acid, 24 hr urine',
	'description' => 'To add to Group: BA	BIOCHEMISTRY, ADRENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BA5',
	'name' => 'Urine free cortisol',
	'description' => 'To add to Group: BA	BIOCHEMISTRY, ADRENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE1',
	'name' => 'Sodium, serum',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE2',
	'name' => 'Potassium, serum',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE3',
	'name' => 'Sodium and potassium, serum',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE4',
	'name' => 'Chloride, serum',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE5',
	'name' => 'Sodium, 24 hr urine',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE6',
	'name' => 'Potassium, 24 hr urine',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE7',
	'name' => 'Sodium and potassium 24 hr urine',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE8',
	'name' => 'Calcium, serum',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE9',
	'name' => 'Calcium 24 hr urine',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BEA',
	'name' => 'Phosphate, serum',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BEB',
	'name' => 'Magnesium, serum',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BEC',
	'name' => 'Magnesium, urine',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BF1',
	'name' => 'Faecal occult blood, human haemoglobin specific',
	'description' => 'To add to Group: BF	BIOCHEMISTRY, FAECES TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BF2',
	'name' => 'Faecal fat (quantitative)',
	'description' => 'To add to Group: BF	BIOCHEMISTRY, FAECES TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BF5',
	'name' => 'Faecal reducing substances',
	'description' => 'To add to Group: BF	BIOCHEMISTRY, FAECES TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BG1',
	'name' => 'Fructosamine',
	'description' => 'To add to Group: BG	BIOCHEMISTRY, GLUCOSE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BG2',
	'name' => 'Glycosylated haemoglobin',
	'description' => 'To add to Group: BG	BIOCHEMISTRY, GLUCOSE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BG3',
	'name' => 'Glucose Tolerance Test standard',
	'description' => 'To add to Group: BG	BIOCHEMISTRY, GLUCOSE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BG4',
	'name' => 'Glucose Tolerance Test post-polycose',
	'description' => 'To add to Group: BG	BIOCHEMISTRY, GLUCOSE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BG5',
	'name' => 'Serum glucose',
	'description' => 'To add to Group: BG	BIOCHEMISTRY, GLUCOSE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH1',
	'name' => 'Ferritin, serum',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH2',
	'name' => 'Transferrin, serum',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH3',
	'name' => 'Iron binding capacity, serum',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH4',
	'name' => 'Iron, serum',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH7',
	'name' => 'Folate, red cell',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH8',
	'name' => 'Folate plus Vitamin B12, serum',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BL1',
	'name' => 'Cholesterol total, serum',
	'description' => 'To add to Group: BL	BIOCHEMISTRY, LIPID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BL3',
	'name' => 'Triglycerides, fasting only',
	'description' => 'To add to Group: BL	BIOCHEMISTRY, LIPID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BL4',
	'name' => 'Fasting lipid group test',
	'description' => 'To add to Group: BL	BIOCHEMISTRY, LIPID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BL5',
	'name' => 'Lipoproteins, electrophoresis, serum',
	'description' => 'To add to Group: BL	BIOCHEMISTRY, LIPID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BM1',
	'name' => 'Digoxin',
	'description' => 'To add to Group: BM	BIOCHEMISTRY, MONITORING TESTS FOR DRUGS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BM2',
	'name' => 'Lithium',
	'description' => 'To add to Group: BM	BIOCHEMISTRY, MONITORING TESTS FOR DRUGS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BM3',
	'name' => 'Antiepileptics',
	'description' => 'To add to Group: BM	BIOCHEMISTRY, MONITORING TESTS FOR DRUGS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BM4',
	'name' => 'Theophylline',
	'description' => 'To add to Group: BM	BIOCHEMISTRY, MONITORING TESTS FOR DRUGS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP1',
	'name' => 'Proteins total, serum',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP2',
	'name' => 'Albumin, serum',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP3',
	'name' => 'Protein electrophoretic pattern, serum',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP4',
	'name' => 'Electrophoresis concentrated urine',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP5',
	'name' => 'Immunoglobulins (IgA, IgE, IgG, or IgM)',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP6',
	'name' => 'Paraprotein Identification',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP7',
	'name' => 'Proteins, 24 hr urine',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP8',
	'name' => 'Microalbumin, early morning urine',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BR1',
	'name' => 'Creatinine, serum',
	'description' => 'To add to Group: BR	BIOCHEMISTRY, RENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BR2',
	'name' => 'Urea, serum',
	'description' => 'To add to Group: BR	BIOCHEMISTRY, RENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BR3',
	'name' => 'Urate or uric acid, serum',
	'description' => 'To add to Group: BR	BIOCHEMISTRY, RENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BR5',
	'name' => 'Urinary calculus analysis',
	'description' => 'To add to Group: BR	BIOCHEMISTRY, RENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BR8',
	'name' => 'Creatinine, 24 hr urine',
	'description' => 'To add to Group: BR	BIOCHEMISTRY, RENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BR9',
	'name' => 'Creatinine clearance test',
	'description' => 'To add to Group: BR	BIOCHEMISTRY, RENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BED',
	'name' => 'Bicarbonate or Total CO2, serum',
	'description' => 'To add to Group: BS	BIOCHEMISTRY, BLOOD GAS ASSAYS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BS2',
	'name' => 'pH, pO2, and pCO2',
	'description' => 'To add to Group: BS	BIOCHEMISTRY, BLOOD GAS ASSAYS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BT1-TSH',
	'name' => 'Thyroid stimulating hormone, serum (TSH)',
	'description' => 'To add to Group: BT	BIOCHEMISTRY, THYROID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BT2',
	'name' => 'Free thyroxine index or free T4',
	'description' => 'To add to Group: BT	BIOCHEMISTRY, THYROID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BT3',
	'name' => 'Serum free T3',
	'description' => 'To add to Group: BT	BIOCHEMISTRY, THYROID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BU1',
	'name' => 'Hydroxy-indoleacetic acetic acid (serotonin)',
	'description' => 'To add to Group: BU	BIOCHEMISTRY, UNCATEGORISED TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BV1',
	'name' => 'Bilirubin total, serum',
	'description' => 'To add to Group: BV	BIOCHEMISTRY, LIVER TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BV2',
	'name' => 'Bilirubin total, conjugated and unconjugated serum',
	'description' => 'To add to Group: BV	BIOCHEMISTRY, LIVER TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BV4',
	'name' => 'Alcohol, diagnostic purposes only',
	'description' => 'To add to Group: BV	BIOCHEMISTRY, LIVER TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BV9',
	'name' => 'Liver function group',
	'description' => 'To add to Group: BV	BIOCHEMISTRY, LIVER TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX1',
	'name' => 'Progesterone, serum',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX2',
	'name' => 'Chorionic gonadotrophin qualitative plus quantitative (HCG)',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX3',
	'name' => 'Follicle stimulating hormone (FSH)',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX4',
	'name' => 'Luteinising hormone (LH)',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX5',
	'name' => 'Oestradiol, serum',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX7',
	'name' => 'Prolactin, serum',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ1',
	'name' => 'Amylase',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ2',
	'name' => 'Asparate amino transferase, serum - AST',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ3',
	'name' => 'Creatine kinase, serum (CK)',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ4',
	'name' => 'Acid phosphatase, serum',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ5',
	'name' => 'Alkaline phosphatase, serum',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ6',
	'name' => 'Gamma glutamyl transferase, serum (GGT)',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ7',
	'name' => 'Myocardial screen',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ8',
	'name' => 'Alanine transaminase - ALT',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ9',
	'name' => 'Other enzymes where specifically requested',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZP',
	'name' => 'Acid phosphatase',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C10',
	'name' => 'Cytological examination of cervical smears (per accession)',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C20',
	'name' => 'Cytological examination of smears from other sites (per accession)',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C30',
	'name' => 'Cytological urgent examination of smear taken during surgery, extra',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C40',
	'name' => 'Cytological examination of fine needle aspiration taken and examined by Pathologist',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C50',
	'name' => 'Histology (per accession)',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C51',
	'name' => 'Immunochemistry, first stain',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C52',
	'name' => 'Immunochemistry, subsequent stains (up to a maximum of 5 in total)',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C53',
	'name' => 'Immunocytochemistry, first stain',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C54',
	'name' => 'Immunocytochemistry, subsequent stains (up to a maximum of 5 in total)',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C80',
	'name' => 'Histology - frozen section during surgery, extra',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D01',
	'name' => 'Skin tests, immediate hypersensitivity',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D12',
	'name' => 'Tuberculin skin test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D14',
	'name' => 'Other skin tests for cell mediated immunity',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D15',
	'name' => 'Auto-immune disease, anti-nuclear antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D16',
	'name' => 'Auto-immune disease, anti-nuclear antibody titre',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D17',
	'name' => 'Auto-immune disease, thyroid',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D19',
	'name' => 'Autoantibodies, other',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D20',
	'name' => 'Rheumatoid factor - Rose Waaler test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D21',
	'name' => 'C-reactive protein test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D22',
	'name' => 'Antistreptococcal antibodies',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D23',
	'name' => 'Paul-Bunnell (or equivalent)',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D24',
	'name' => 'Syphilis - VDRL or other reagin test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D25',
	'name' => 'Syphilis - specific antibody test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D26',
	'name' => 'Syphilis - confirmatory specific antibody test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D31',
	'name' => 'Hydatids antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D32',
	'name' => 'Leptospira agglutination screen test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D33',
	'name' => 'Leptospira specific antibody test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D34',
	'name' => 'Brucella antibodies',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D35',
	'name' => 'Toxoplasma antibodies IgG',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D36',
	'name' => 'Toxoplasma antibodies IgM',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D40',
	'name' => 'Rubella antibodies - IgG',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D41',
	'name' => 'Rubella antibodies - IgM',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D42',
	'name' => 'Hepatitis B - (Anti HBs) antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D43',
	'name' => 'Hepatitis B - (HBsAg) surface antigen',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D44',
	'name' => 'Hepatitis B (anti HBc) antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D45',
	'name' => 'Hepatitis B (HBe) e antigen',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D46',
	'name' => 'Hepatitis A IgM antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D47',
	'name' => 'Hepatitis A IgG antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D48',
	'name' => 'Hepatitis C antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D50',
	'name' => 'Salmonella agglutination tests',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D60',
	'name' => 'CM virus, specific antibody titre',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D61',
	'name' => 'Epstein-Barr virus IgM antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D62',
	'name' => 'Epstein-Barr virus IgG antibody',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D70',
	'name' => 'Chlamydia direct antigen test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D71',
	'name' => 'Rotovirus direct antigen test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D72',
	'name' => 'Herpes virus direct antigen test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D73',
	'name' => 'Giardia direct antigen test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D80',
	'name' => 'HIV Screen test',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H01',
	'name' => 'Erythrocyte sedimentation rate (ESR)',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H03',
	'name' => 'Bleeding time',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H04',
	'name' => 'Thrombin time',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H05',
	'name' => 'Clot retraction',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H06',
	'name' => 'Plasma prothrombin ratio',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H07',
	'name' => 'Partial thrombosplastin clotting time',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H08',
	'name' => 'Fibrinogen (qualitative)',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H09',
	'name' => 'Fibrinogen (quantitative)',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H10',
	'name' => 'Coagulation factors individual assays',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H15',
	'name' => 'Coagulation profile',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H19',
	'name' => 'Red blood cell inclusion bodies',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H20',
	'name' => 'Anti-human globulin test including Coombs test',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H22',
	'name' => 'Lupus erythematosis cells (LE cells)',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H31',
	'name' => 'Red blood cell fragility',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H32',
	'name' => 'Red blood cell autohaemolysis',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H33',
	'name' => 'Red cell or white cell enzyme',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H34',
	'name' => 'Donath-Landsteiner reaction',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H40',
	'name' => 'Haemoglobin pigments - qualitative',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H41',
	'name' => 'Haemoglobin pigments - quantitative',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H50',
	'name' => 'Bone marrow aspirate - (per site, not per slide)',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H60',
	'name' => 'Blood grouping ABO group',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H61',
	'name' => 'Blood grouping - Rhesus - group',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H62',
	'name' => 'Blood grouping - Rhesus - titre',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H63',
	'name' => 'Blood grouping - Rhesus - phenotyping',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H64',
	'name' => 'Blood grouping - ABO/ Rhesus group',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M01',
	'name' => 'Swab, skin/wound/pus',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M02',
	'name' => 'Swab, throat',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M03',
	'name' => 'Swab, ear',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M04',
	'name' => 'Swab, nasal',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M05',
	'name' => 'Swab, peri-anal',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M06',
	'name' => 'Swab, vaginal',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M07',
	'name' => 'Swab, cervical',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M08',
	'name' => 'Swab, urethral',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M09',
	'name' => 'Swab, eye',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M10',
	'name' => 'Swab, rectal for sexually transmitted diseases',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M11',
	'name' => 'Enteric pathogens (faeces or rectal swab)',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M15',
	'name' => 'Ova and cysts',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M16',
	'name' => 'Aspirates, culture and sensitivities',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M17',
	'name' => 'Blood culture',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M18',
	'name' => 'Sputum (excluding tuberculosis)',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M19',
	'name' => 'Other, culture, sensitivities and identification',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M20',
	'name' => 'Mycology - skin',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M21',
	'name' => 'Film - examination for malaria, filaria, and/or gonococci',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M22',
	'name' => 'Film (concentrated) examination for filaria',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M25',
	'name' => 'Seminal fluid - fertility',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M26',
	'name' => 'Seminal fluid - post vasectomy',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M30',
	'name' => 'Tuberculosis - sputum',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M31',
	'name' => 'Tuberculosis - gastric aspirate',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M32',
	'name' => 'Tuberculosis - urine',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M33',
	'name' => 'Tuberculosis - other sites',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M40',
	'name' => 'Urine culture - (with colony count, identification and sensitivities where indicated)',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'S01',
	'name' => 'Complete blood count (CBC)',
	'description' => 'To add to Group: S	OTHER GROUP TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'S02',
	'name' => 'First antenatal group',
	'description' => 'To add to Group: S	OTHER GROUP TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'S03',
	'name' => 'Antenatal subsequent groups',
	'description' => 'To add to Group: S	OTHER GROUP TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'S04',
	'name' => 'Antenatal antibodies, including Coombs test',
	'description' => 'To add to Group: S	OTHER GROUP TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'S05',
	'name' => 'Neonatal group',
	'description' => 'To add to Group: S	OTHER GROUP TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BR0',
	'name' => 'Biochemistry - renal',
	'description' => 'To add to Group: BR	BIOCHEMISTRY, RENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BS0',
	'name' => 'Biochemistry - blood gases',
	'description' => 'To add to Group: BS	BIOCHEMISTRY, BLOOD GAS ASSAYS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BT0',
	'name' => 'Biochemistry - thyroid',
	'description' => 'To add to Group: BT	BIOCHEMISTRY, THYROID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BT1-S',
	'name' => 'Thyroid Stimulating hormone (serum)',
	'description' => 'To add to Group: BT	BIOCHEMISTRY, THYROID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BW0',
	'name' => 'Biochemistry - whatever',
	'description' => 'To add to Group: B	BIOCHEMISTRY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BW1',
	'name' => 'Hydroxy-indoleacetic acid (serotonin)',
	'description' => 'To add to Group: B	BIOCHEMISTRY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX0',
	'name' => 'Biochemistry - reproductive',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ0',
	'name' => 'Biochemistry - enzymes',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C00',
	'name' => 'Cytology and morbid histology',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D00',
	'name' => 'Diagnostic immunological and serological tests',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BP0',
	'name' => 'Biochemistry - proteins',
	'description' => 'To add to Group: BP	BIOCHEMISTRY, PROTEIN TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H02',
	'name' => 'Platelet count',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BZ',
	'name' => 'Aspartate amino transferase (serum)',
	'description' => 'To add to Group: BZ	BIOCHEMISTRY, ENZYME TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'M00',
	'name' => 'Microbiology tests',
	'description' => 'To add to Group: M	MICROBIOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'S06',
	'name' => 'Urinalysis screen tests',
	'description' => 'To add to Group: S	OTHER GROUP TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BE0',
	'name' => 'Biochemistry - electrolytes',
	'description' => 'To add to Group: BE	BIOCHEMISTRY, ELECTROLYTE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BF3',
	'name' => 'Occult Blood',
	'description' => 'To add to Group: BF	BIOCHEMISTRY, FAECES TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BG0',
	'name' => 'Biochemistry - glucose',
	'description' => 'To add to Group: BG	BIOCHEMISTRY, GLUCOSE TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH5',
	'name' => 'Vitamin B12 (serum)',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH6',
	'name' => 'Serum folate',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BL0',
	'name' => 'Biochemistry - lipids',
	'description' => 'To add to Group: BL	BIOCHEMISTRY, LIPID TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'B00',
	'name' => 'Biochemistry tests',
	'description' => 'To add to Group: B	BIOCHEMISTRY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BA0',
	'name' => 'Biochemistry - adrenal',
	'description' => 'To add to Group: BA	BIOCHEMISTRY, ADRENAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BU0',
	'name' => 'Biochemistry uncategorised tests',
	'description' => 'To add to Group: BU	BIOCHEMISTRY, UNCATEGORISED TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BF0',
	'name' => 'Biochemistry - faeces',
	'description' => 'To add to Group: BF	BIOCHEMISTRY, FAECES TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BS1',
	'name' => 'Bicarbonate or total CO2 (serum)',
	'description' => 'To add to Group: BS	BIOCHEMISTRY, BLOOD GAS ASSAYS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BV0',
	'name' => 'Biochemistry - liver',
	'description' => 'To add to Group: BV	BIOCHEMISTRY, LIVER TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BH0',
	'name' => 'Biochemistry - haemopoietic',
	'description' => 'To add to Group: BH	BIOCHEMISTRY, HAEMOPOITEIC TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H00',
	'name' => 'Haematology',
	'description' => 'To add to Group: H	HAEMATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BM0',
	'name' => 'Biochemistry - monitoring drugs',
	'description' => 'To add to Group: BM	BIOCHEMISTRY, MONITORING TESTS FOR DRUGS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'S00',
	'name' => 'Screening tests',
	'description' => 'To add to Group: S	OTHER GROUP TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D90',
	'name' => 'Prostate Specific Antigen',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'D91',
	'name' => 'Prostate Specific Antigen',
	'description' => 'To add to Group: D	DIAGNOSTIC IMMUNOLOGICAL & SEROLOGICAL TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BU2',
	'name' => 'Troponin T and Troponin I',
	'description' => 'To add to Group: BU	BIOCHEMISTRY, UNCATEGORISED TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'BX8',
	'name' => 'Serum Testosterone',
	'description' => 'To add to Group: BX	BIOCHEMISTRY, REPRODUCTIVE SYSTEM TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'C49',
	'name' => 'Histology (Levels 4 to 6) Waitemata Health only',
	'description' => 'To add to Group: C	CYTOLOGY AND MORBID HISTOLOGY _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'H16',
	'name' => 'Coagulation profile (Group H06 - H07 - S01)',
	'description' => 'To add to Group: H	HAEATOLOGY TESTS _ Source: Ministry of Health - New Zealand - URL:https://www.health.govt.nz/system/files/documents/pages/laboratory-test.xls',
	'isActive' => '0',
	'specimen_id' => '123',
]);

App\Models\Test::create([
	'code' => 'XXXX',
	'name' => 'Undefinded Test',
	'description' => 'added and activated for development purposes',
	'isActive' => '1',
	'specimen_id' => '123',
]);

    }
}
