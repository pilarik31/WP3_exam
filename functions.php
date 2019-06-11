<?php
class Evaluation
{
    public function isWorkable($age, $gender, $job)
    {
        if (empty($gender) ||
            empty($age) ||
            empty($job)) {
            return false;
        }

        if ($job == "digger" && $age >= 18 && $age <= 50 && $gender =="male") {
            return true;
        } elseif ($job == "itGuy" && $age >= 20 && $age <= 50) {
            return true;
        } elseif ($job == "janitor" && $age >= 18 && $age <= 60 && $gender == "female") {
            return true;
        }

        return false;
    }
}
