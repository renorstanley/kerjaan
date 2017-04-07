<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funded_clients extends Model
{
    protected $table ='funded_clients';
    protected $fillable =[
        'full_name', 'email', 'company', 'currency', 
        'mobile_number', 'financial_report','funding_amount_req', 'purchases_order',
        'country', 'industry', 'year_established','est_annual_revenue' ,
        'assets_to_be_purchased','funding_period'
    ];
}
