if [ ! -d "./vendor" ]; then
  # If there is no ./vendor run install.sh.
  sudo bash install.sh
fi

# Open the url
if [[ "$OSTYPE" == "linux-gnu" ]]; then
        # Mac OSX
        xdg-open http://localhost:8080/form.html

elif [[ "$OSTYPE" == "darwin"* ]]; then
        # Mac OSX
        open http://localhost:8080/form.html
fi

php -S localhost:
