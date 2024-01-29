
        document.addEventListener('DOMContentLoaded', function () {
            alert("Hello vlog, welcome to my guys!! :)");
        });

        var whoAmI = [
            "<b>Name:</b> Hans Edwin Yucson Maybituin",
            "<b>Age:</b> 20 yrs. old",
            "<b>Favorite Car:</b> Mitsubishi Evo VIII",
            "<b>Hobbies:</b> Playing MOBA and first-person shooter games, playing basketball, long drives, and singing",
            "<b>Nickname:</b> Hans"
        ];

        var whoAmIList = document.getElementById('whoAmI');
        whoAmI.forEach(function (item) {
            var listItem = document.createElement('li');
            listItem.innerHTML = item;
            whoAmIList.appendChild(listItem);
        });

        function showMyInfo() {
            var questionPart = document.getElementById('questionPart');
            var infoButton = document.getElementById('infoButton');

            if (questionPart.style.display === 'none') {
                questionPart.style.display = 'block';
                infoButton.innerHTML = 'Hide My Information';
            } else {
                questionPart.style.display = 'none';
                infoButton.innerHTML = 'Show My Information';
            }
        }

        function showSocialLinks() {
            var socialLinks = document.getElementById('socialLinks');
            if (socialLinks.style.display === 'none') {
                socialLinks.style.display = 'block';
            } else {
                socialLinks.style.display = 'none';
            }
        }

        function displayDateTime() {
            var dateTimeElement = document.getElementById('demo');
            dateTimeElement.innerHTML = Date();
        }
        const person = {
            firstName: "Hans",
            lastName: "Maybituin",
            id: 5566,
        };
        person.name = function () {
            return (this.firstName + " " + this.lastName).toUpperCase();
        };

        document.getElementById("demo").innerHTML =
            "I am " + person.name();
        

        