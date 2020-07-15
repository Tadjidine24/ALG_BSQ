<?php
#! /usr/bin/perl −w
if((scalar @ ARGV)!=3)
{
    print"program x y density\n ";
    exit;
}
$x = $ARGV [0] ;
$y = $ARGV [1] ;
$density=$ARGV[2];
$i = 0;
$j = 0;
print $y."\n ";
while($i<$y)
{
    $j = 0;
    while($j<$x)
    {
        if (intval(rand($y)*2)<$density)
        {
            print" o " ;
        }
        else
        {
            print" . " ;
        }
        $j++;
    }
    print" \n " ;
    $i++ ;
}