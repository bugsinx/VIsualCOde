class Solution {

    /**
     * @param String $colors
     * @param Integer[] $neededTime
     * @return Integer
     */
    function minCost($colors, $neededTime) {
        $color_groups =  preg_split('/(.)(?!\1|$)\K/', $colors);
        
        $minimum_time = 0;
        foreach($color_groups as $cgroup) {
            $group_length = strlen($cgroup);            
            if($group_length > 1) {
                $position = strpos($colors,$cgroup);                
                $costs_array=array_slice($neededTime,$position,$group_length);
                $minimum_time+=array_sum($costs_array)-max($costs_array);
            }
        }
        
        return $minimum_time;
    }
}
