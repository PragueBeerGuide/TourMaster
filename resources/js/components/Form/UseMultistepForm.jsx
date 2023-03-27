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
import { number } from "prop-types";
   
  export default function Form() {
    const [page, setPage] = useState(0);
    const [formData, setFormData] = useState({
      email: "",
      telephone: "",
      firstName: "",
      lastName: "",
      username: "",
      nationality: "",
      negcount:"-",
      pluscount:"+",
      count:0
    });
  
    const FormTitles = ["Sign Up", "Personal Info", "Confirmation"];
    const PageDisplay = () => {
    if (page === 0) {
        return <PersonalInfo formData={formData} setFormData={setFormData} />;
      } else if (page === 1) {
        return <SignUpInfo formData={formData} setFormData={setFormData} />;
      } else if (page === 2) {
        return <Confirmation formData={formData} setFormData={setFormData} />
      };
    }
  
  return (
    <div className="form">
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
                alert("You're going on an adventure!");
                console.log(formData);
              } else {
                setPage((currPage) => currPage + 1);
              }
            }}
          > 
            {page === FormTitles.length - 1 ? "Submit" : "Next"}
          </Button>
        </div>
      </div>
    </div>
  );
}

