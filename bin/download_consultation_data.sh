mkdir -p data
for i in 2 3 4 5 6 ; do
  curl "http://data.assemblee-nationale.fr/static/openData/repository/CONSULTATIONS_CITOYENNES/EGALITE/EGALITE"$i".json" | sed 's/\({"id":"[^"]*","sexe"\)/\n\1/g' | sed 's/.$//' > "data/EGALITE"$i".json"
done
