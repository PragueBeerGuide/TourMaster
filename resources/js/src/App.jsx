import { Routes, Route, Navigate } from "react-router-dom";
import { Dashboard, Auth } from "../layouts";
import Home from "../pages/home/Home";
import Tours from "../pages/tours/Tours";

function App() {

  return (
    
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/tours" element={<Tours />} />
      <Route path="/dashboard/*" element={<Dashboard />} />
      <Route path="/auth/*" element={<Auth />} />
      {/* <Route path="*" element={<Navigate to="/dashboard/home" replace />} /> */}
    </Routes>
  )
}

export default App;