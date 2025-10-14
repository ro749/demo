<?php

namespace App\Plans;

use Ro749\ListingUtils\Plans\PlansBase;
use Ro749\ListingUtils\Plans\Plan;
class Plans extends PlansBase
{
    public function __construct()
    {
        parent::__construct(
            plans_table: "plans",
            lines_table: "planlines",
            months_tag: "MESES",
            mensuality_tag: "MENSUALIDAD",
            default_plan: new Plan(
                id:0,
                title:'',
                discounts:0,
                lines:[],
                price_tag:'PRECIO DE LISTA',
                discount_tag:'DESCUENTO',
                total_tag: 'PRECIO PROMOCIÓN',
                total_on_top: true
            ),
        );
    }
    public function get(): array{
        return $this->get_in_matrix(3);
    }
}