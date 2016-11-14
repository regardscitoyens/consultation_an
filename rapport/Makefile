all: rapport.pdf

clean:
	rm rapport.md

force: clean all

rapport.pdf: rapport.md logos.png  nbrecontributeursparquestion.png  nbrecontributeursquestionouvertes_pourcent.png  nbrecontributeursquestionouvertes_valabsol.png
	pandoc --variable=lang:fr -s -S --toc -o rapport.pdf rapport.md

rapport.md:
	curl https://pad.regardscitoyens.org/p/consultationFemmeHomme/export/txt | grep -A 2000 "===================== DEBUT ===================" | grep -B 2000 "=================== FIN" | tail -n +3 | head -n -1 > rapport.md
	
