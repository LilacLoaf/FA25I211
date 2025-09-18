    <?php

    /**
     * Author: Jonathan Nguyen
     * Date: 9/4/2025
     * File: HandsOn1.class.php
     * Description:
     */
    class Banana
    {
        private float $price, $weight, $calories;

        public function __construct(float $price, float $weight, float $calories)
        {
            $this->price = $price;
            $this->weight = $weight;
            $this->calories = $calories;
        }

        public function getPrice(): float
        {
            return $this->price;
        }

        public function getWeight(): float
        {
            return $this->weight;
        }

        public function getCalories(): float
        {
            return $this->calories;
        }

        public function setWeight(float $weight)
        {
            $this->weight = $weight;
        }


        public function calculateCalories(): float
        {
            return $this->weight * $this->calories;
        }
    }