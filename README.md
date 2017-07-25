# Amazon Item Price Extractor
This is a simple educational php script which extracts and shows price of an amazon product. It does not use any APIs and just retrieves the page contents and displays only the price of the item. **This currently only works on amazon.com.**
I'll add more features later which will store the prices on a file along with date and time so this script can be used as a simple price tracker by using cron jobs.
## How to use
Download and upload the azn.php to your server/web host. Add desired amazon.com product url on `$itemURL` which is by default set to `https://www.amazon.com/AmazonBasics-Velvet-Suit-Hangers-Black/dp/B00FXNAAW2/ref=sr_1_2?s=home-garden&srs=10112675011&ie=UTF8&qid=1500983517&sr=1-2`
## Credits
I've used the following resources for completing this script :

[SO Question : Get DIV content from external Website](https://stackoverflow.com/questions/20446598/get-div-content-from-external-website%20/)

[PHP file_get_contents&#40;&#41; and setting request headers](https://stackoverflow.com/questions/2107759/php-file-get-contents-and-setting-request-headers#2107792)

[W3C PHP explode()](https://www.w3schools.com/php/func_string_explode.asp)
## To Do List
- [ ] Make the script compatible with other amazon sites
- [ ] Extract more details than just the price
- [ ] Improve the layout
- [ ] Add more user agents and randomly select one each time
- [ ] Save the price and time to a file
- [ ] Adding a text box and button for adding the URL so editing the script can be avoided.
