# Wasty-ImageClassifier
#######################
Librairies n�cessaires:
Flask==0.11.1
Pillow==3.4.2
requests==2.9.1
pandas==0.19.2
numpy==1.12
scipy==0.18
matplotlib==1.5.3
scikit-image==0.12.0
scikit-learn==0.18.1
opencv==3.2
theano + keras 
######################
Utilisation de server.py
Le server.py permet de lancer un serveur local permettant de lancer nos programmes
fait sur SIFT. 

localhost:5000/train1/
localhost:5000/classify1/url	<- url � remplir
-> comparaisons des keypoints donn�s par SIFT et on renvoie celui qui � le plus de keypoints en commun

localhost:5000/train2/
localhost:5000/classify2/url	<- url � remplir
-> comparaisons des keypoints donn�s par "bag-of-words" avec comme classifieur adaboost car cela donne de meilleurs r�sultats
	Cependant, il y a en commentaire, diff�rentes m�thodes de classification.