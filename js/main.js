$(document).ready(function(e) {

    $("#basic-to-information-button").click(
        function() {
            document.getElementById("basic-form").className += " escondido";
            $(document.getElementById("information-form")).removeClass("escondido");
        }
    );

    $("#information-to-experience").click(
        function() {
            document.getElementById("information-form").className += " escondido";
            $(document.getElementById("experience-form")).removeClass("escondido");
        }
    );

    $("#experience-to-formation").click(
        function() {
            document.getElementById("experience-form").className += " escondido";
            $(document.getElementById("formation-form")).removeClass("escondido");
        }
    );

    $("#formation-to-extra").click(
        function() {
            document.getElementById("formation-form").className += " escondido";
            $(document.getElementById("extra-form")).removeClass("escondido");
        }
    );

    $("#extras-to-habilities").click(
        function() {
            document.getElementById("extra-form").className += " escondido";
            $(document.getElementById("habilities-form")).removeClass("escondido");
        }
    );

    $("#habilities-to-resume").click(
        function() {
            document.getElementById("habilities-form").className += " escondido";
            $(document.getElementById("resume-form")).removeClass("escondido");
        }
    );

    $("#resume-to-habilities").click(
        function() {
            document.getElementById("resume-form").className += " escondido";
            $(document.getElementById("habilities-form")).removeClass("escondido");
        }
    );

    $("#habilities-to-extras").click(
        function() {
            document.getElementById("habilities-form").className += " escondido";
            $(document.getElementById("extra-form")).removeClass("escondido");
        }
    );

    $("#extra-to-formation").click(
        function() {
            document.getElementById("extra-form").className += " escondido";
            $(document.getElementById("formation-form")).removeClass("escondido");
        }
    );

    $("#formation-to-experience").click(
        function() {
            document.getElementById("formation-form").className += " escondido";
            $(document.getElementById("experience-form")).removeClass("escondido");
        }
    );

    $("#experience-to-information").click(
        function() {
            document.getElementById("experience-form").className += " escondido";
            $(document.getElementById("information-form")).removeClass("escondido");
        }
    );

    $("#information-to-basic-button").click(
        function() {
            document.getElementById("information-form").className += " escondido";
            $(document.getElementById("basic-form")).removeClass("escondido");
        }
    );

});