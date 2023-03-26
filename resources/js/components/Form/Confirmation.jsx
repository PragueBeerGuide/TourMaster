import React from "react";


import {
    Card,
    Input,
    Checkbox,
    Button,
    Typography,
    H3
  } from "@material-tailwind/react";

export default function Confirmation({ formData, setFormData, count }) {
  return (
    <Card color="transparent" shadow={false}>
    <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
    <div className="mb-4 flex flex-col gap-6">
    <H3><strong>You've selected {count} adults at....Kč</strong></H3>
      </div>
    </div>
        
    </Card>
  );
}