import { Switch } from "react-router-dom";
import "./App.scss";
import QuanLyNguoiDungAdmin from "./Pages/AdminPages/QuanLyNguoiDungAdmin";
import HomePage from "./Pages/ClientPages/HomePage";
import NewDetail from "./Pages/ClientPages/NewDetail/NewDetail";
import { AdminTemplate } from "./Templates/AdminTemplate";
import { MainTemplate } from "./Templates/MainTemplate";

function App() {
  return (
    <Switch>
      <MainTemplate exact path="/" Component={HomePage} />
      <MainTemplate exact path="/detail" Component={NewDetail} />

      <AdminTemplate exact path="/admin" Component={QuanLyNguoiDungAdmin} />
    </Switch>
  );
}

export default App;
