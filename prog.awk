#!/usr/bin/awk -f
BEGIN {FS=":"}
$3<50 {vnt=(cnt+$4)}
END {print "le resultat est"cnt}
