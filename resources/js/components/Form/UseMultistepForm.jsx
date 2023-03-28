import React, { useState } from "react";
import SignUpInfo from "./SignUpInfo";
import PersonalInfo from "./PersonalInfo";
import Confirmation from "./Confirmation";

import {
    Card,
    Input,
    Checkbox,
    Button,
    Typography,
} from "@material-tailwind/react";

export default function Form({ date }) {
    const [page, setPage] = useState(0);

    let formIsValid = true;

    const [formData, setFormData] = useState({
        date: date,
        email: "",
        telephone: "",
        firstName: "",
        lastName: "",
        username: "",
        negcount: "-",
        pluscount: "+",
        count: 0,
    });
    const isEmailValid = (email) => {
        // Use a regular expression to check if the email is in a valid format
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    };

    const FormTitles = [
        "How many are joining?",
        "Who are you? (We promise not to tell anyone else)",
        "Is this right?",
    ];
    const PageDisplay = () => {
        if (page === 0) {
            return (
                <PersonalInfo formData={formData} setFormData={setFormData} />
            );
        } else if (page === 1) {
            return <SignUpInfo formData={formData} setFormData={setFormData} />;
        } else if (page === 2) {
            return (
                <Confirmation formData={formData} setFormData={setFormData} />
            );
        }
    };

    return (
        <form className="form">
            <div className="form-container">
                <div className="header">
                    <h1>{FormTitles[page]}</h1>
                </div>
                {console.log(page)}
                <div className="body">{PageDisplay()}</div>
                <div className="footer">
                    <Button
                        disabled={page == 0}
                        onClick={() => {
                            setPage((currPage) => currPage - 1);
                        }}
                    >
                        Prev
                    </Button>
                    <Button
                        onClick={() => {
                            if (page === FormTitles.length - 1) {
                                alert("Jedeme na pivo!");
                                console.log(formData);

                                $.ajax({
                                    url: "/home/action",
                                    type: "POST",
                                    data: {
                                        title: title,
                                        formData: start,
                                        formData: end,
                                        type: "add",
                                    },
                                    success: function () {
                                        alert("Jedeme na pivo!");
                                    },
                                });
                            } else if (
                                page === 1 &&
                                (!formData.username ||
                                    !formData.lastName ||
                                    !formData.email ||
                                    !formData.telephone)
                            ) {
                                formIsValid = false;
                                alert("Please fill in all required fields.");
                            } else if (
                                page === 1 &&
                                !isEmailValid(formData.email)
                            ) {
                                alert("Please provide a valid email address");
                            } else {
                                setPage((currPage) => currPage + 1);
                            }
                        }}
                    >
                        {page === FormTitles.length - 1 ? "Submit" : "Next"}
                    </Button>
                </div>
            </div>
        </form>
    );
}
