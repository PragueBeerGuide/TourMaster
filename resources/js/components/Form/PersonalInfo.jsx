import React from "react";
import {
    Card,
    Input,
    Checkbox,
    Button,
    Typography,
    Select,
    Option
  } from "@material-tailwind/react";

export default function PersonalInfo({ formData, setFormData }) {
  return (

    <Card color="transparent" shadow={false}>
    <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
    <div className="mb-4 flex flex-col gap-6">
      {/* <Input
        type="text"
        placeholder="First Name..."
        value={formData.firstName}
        onChange={(e) => {
          setFormData({ ...formData, firstName: e.target.value });
        }}
      /> */}
      {/* </div> */}
      <div className="mb-4 flex flex-col gap-6">
        <label>Adults</label>
      <Select>
    <Option>1</Option>
    <Option>2</Option>
      </Select>
      {/* <div className="mb-4 flex flex-col gap-6">
      <Input
        type="text"
        placeholder="Username..."
        value={formData.username}
        onChange={(e) => {
          setFormData({ ...formData, username: e.target.value });
        }}
      /> */}
      </div>
    </div>
    </div>
    </Card>
  );
}

