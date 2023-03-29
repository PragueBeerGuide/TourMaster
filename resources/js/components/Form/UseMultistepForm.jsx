import React, { useState } from "react";
import SignUpInfo from "./SignUpInfo";
import PersonalInfo from "./PersonalInfo";
import Confirmation from "./Confirmation";
import axios from "axios";
import moment from "moment";

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
        negcount: "-",
        pluscount: "+",
        count: 0,
        time: "6pm",
    });

    const isEmailValid = (email) => {
        // Use a regular expression to check if the email is in a valid format
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    };

    const postData = async () => {
        const responseDate = await axios.post("/events/action", {
            title: `${formData.firstName} ${formData.lastName}`,
            start: `${
                moment(date).format("Y-MM-DD HH:mm:ss").split(" ")[0]
            } 18:00:00`,
            end: `${
                moment(date).format("Y-MM-DD HH:mm:ss").split(" ")[0]
            } 18:00:00`,
            type: "add",
        });

        const responseCustomer = await axios.post("/customer/action", {
            name: `${formData.firstName} ${formData.lastName}`,
            email: `${formData.email}`,
            phone: `${formData.telephone}`,
            type: "add",
        });

        if (responseDate.status === 200 && responseCustomer.status === 200) {
            alert("jdeme na pívo!!!");
        } else {
            alert(responseDate.status);
        }
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
                                postData();
                            } else if (
                                page === 1 &&
                                (!formData.firstName ||
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
