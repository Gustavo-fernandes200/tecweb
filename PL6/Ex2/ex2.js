
            
            function changeColor(elementId, color) {
                var element = document.getElementById(elementId);
                if (element) {
                    element.style.color = color;
                } else {
                    console.error("Elemento com o ID '" + elementId + "' não encontrado.");
                }
            }

            function changeToRed() {
                changeColor("texto", "red");
            }

            function changeToBlue() {
                changeColor("texto", "blue");
            }

            function changeToGreen() {
                changeColor("texto", "green");
            }