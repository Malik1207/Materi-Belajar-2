import { createSlice } from "@reduxjs/toolkit";

const freezerSlice = createSlice({
  name: "freezer",
  initialState: {
    jumlahEsBatu: 0,
    suhu: "0deg",
    isLampungNyala: false,
    barangLain: [],
  },

  reducers: {
    tambahJumlahEsBatu(state) {
      state.jumlahEsBatu += 6;
    },

    ubahSuhu(state, action) {
      state.suhu = action.payload;
    },
  },
});

export const { tambahJumlahEsBatu, ubahSuhu } = freezerSlice.actions;

export default freezerSlice.reducer;
