#!/bin/bash

bash bin/download_consultation_data.sh
for i in 2 3 4 5 5 ; do
  php5 bin/insert_contributions.php "data/EGALITE"$i".json" $i;
done
