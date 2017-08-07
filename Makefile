build:
	php compile.php
	mv adminer.phar adminer
	tar zcvf adminer.tar.gz adminer